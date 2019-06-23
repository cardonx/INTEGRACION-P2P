<?php

namespace App\Http\Controllers;

use Integracion\Http\Request;
use App\Pse;
use App\Person;
use App\Payment;
use Integracion\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Integracion\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function pagos()
    {
        $pagos=DB::table('payments')
                ->join('persons','persons.id','=','payments.payer')
                ->select('payments.id as paymentId','persons.document as document', 'persons.firstName as firstName','persons.lastName as lastName','payments.description as description', 'payments.totalAmount as totalAmount','payments.transactionState as transactionState')
                ->get();
        return view('pagos',compact('pagos'));
    }

    public function crear_pago()
    {
        $pse=new Pse;
        $bancos=$pse->getBankList();
        $personas=Person::all();
        return view('crear_pago',compact('bancos','personas'));
    }

    public function guardar_pago(Request $request)
    {
        $pse=new Pse;
        $persona=Person::find($request->payer);
        $transaccion=$pse->createTransaction($request,$persona);
        if($transaccion->returnCode=='SUCCESS'){
            $pago=new Payment;
            $pago->transactionID=$transaccion->transactionID;
            $pago->bankCode=$request->bankCode;
            $pago->bankInterface=$request->bankInterface;
            $pago->reference=$request->reference;
            $pago->description=$request->description;
            $pago->bankInterface=$request->bankInterface;
            $pago->totalAmount=$request->totalAmount;
            $pago->taxAmount=0;
            $pago->devolutionBase=0;
            $pago->ipAddress=$request->ip();
            $pago->payer=$persona->id;
            $pago->userAgent=$request->userAgent();
            $pago->trazabilityCode=$transaccion->trazabilityCode;
            $pago->responseReasonText=$transaccion->responseReasonText;
            $pago->save();
            return redirect($transaccion->bankURL);
        }
    }

    public function respuesta_pago($reference)
    {
        $pse=new Pse;
        $pago=Payment::where('reference','=',$reference)->first();
        $peticion=$pse->getTransactionInformation($pago->transactionID);
        $respuesta= $peticion->getTransactionInformationResult;
        $pago->transactionState=$respuesta->transactionState;
        $pago->responseReasonText=$respuesta->responseReasonText;
        $pago->update();
        return redirect()->route('pagos')->withFlashSuccess('PSE: '.$respuesta->responseReasonText);
    }

    public function detalles_pago($pago)
    {
        $consulta=DB::table('payments')
                ->join('persons','persons.id','=','payments.payer')
                ->select('payments.id as paymentId','persons.documentType as documentType','persons.document as document', 'persons.firstName as firstName','persons.lastName as lastName','persons.emailAddress as emailAddress','persons.phone as phone','payments.transactionID as transactionID','payments.description as description', 'payments.totalAmount as totalAmount','payments.transactionState as transactionState','payments.reference as reference','payments.ipAddress as ipAddress','payments.userAgent as userAgent','payments.trazabilityCode as trazabilityCode', 'payments.updated_at as updated_at','payments.responseReasonText as responseReasonText')
                ->where('payments.id','=',$pago)
                ->first();

        //dd($consulta);       
        return view('detalles_pago',compact('consulta'));
    }
}
