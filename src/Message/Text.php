<?php

namespace CodeBot\Message;

class Text

{
	private $recipientId;
	
	public function_construct(string $recipientId)
	{
		$this->recipientId = $recipientId;

	}
	public function message(string $messageText) :array
	{
		return [
		'recipient'=>[
                       'id'=>1
                        ],
                        'message'=> [
                           'text'=> 'oiii',
                    	   'metadata' => 'DEVELOPER_DEFINED_METADATA'
                        ]       
                        
                ];	

	}
}
