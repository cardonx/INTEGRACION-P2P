<?php	

namespace App;
use SoapClient;
use SoapHeader;

use Integracion\Support\Facades\Cache;
/**
 * Clase Pse pago electronicos
 */
class Pse 
{
	
	public function getBankList()
	{	
		$seed=date('c');
		$auth=array(
			'login'=>$this->login,
			'tranKey'=>sha1($this->seed.$this->tranKey),
			'seed'=>$this->seed
		);
		$bancos=[];
		if (Cache::has('bankList')) {
		   $bancos=Cache::get('bankList');
		}else{
			$soap = new SoapClient($this->wsdl);
        	$data = $soap->getBankList(['auth'=>$auth]);
			Cache::put('bankList',$data->getBankListResult->item, 1200);
			$bancos=Cache::get('bankList');
		} 			
        return $bancos;
	}

	public function createTransaction($request,$persona)
	{
		$seed=date('c');
		$auth=array(
			'login'=>$this->login,
			'tranKey'=>sha1($this->seed.$this->tranKey),
			'seed'=>$this->seed
		);
		$peticion=array(
			'bankCode'=>$request->bankCode,
			'bankInterface'=>$request->bankInterface,
			'reference'=>$request->reference,
			'language'=>'ES',
			'currency'=>'COP',
			'description'=>$request->description,
			'totalAmount'=>$request->totalAmount,
			'taxAmount'=>'0',
			'devolutionBase'=>'0',
			'payer'=>$persona,
			'ipAddress'=>$request->ip(),
			'userAgent'=>$request->userAgent(),
			'returnURL'=>'http://localhost:8000/pago/respuesta/'.$request->reference
		);
		$soap = new SoapClient($this->wsdl);
        $data = $soap->createTransaction(['auth'=>$auth,'transaction'=>$peticion]);
        return $data->createTransactionResult;
	}

	public function getTransactionInformation($transactionID)
	{
		$seed=date('c');
		$auth=array(
			'login'=>$this->login,
			'tranKey'=>sha1($this->seed.$this->tranKey),
			'seed'=>$this->seed
		);
		$soap = new SoapClient($this->wsdl);
        $data = $soap->getTransactionInformation(['auth'=>$auth,'transactionID'=>$transactionID]);
        return $data;
	}

	public $login='6dd490faf9cb87a9862245da41170ff2';
	public $tranKey='24h1IlD';
	public $wsdl='https://dev.placetopay.com/web/redirection';
	public $endpoint='​https://test.placetopay.com/​ redirection';
	public $seed="";
	public $person=array(
		'document'=>'1057786339',
        'documentType'=>'CC',
        'firstName'=>'Jhonatan',
        'lastName'=>'Cardona',
        'emailAddress'=>'cardo.jhonatan@gmail.com',
        'phone'=>'',
        'id'=>'1'
	); 
}

?>