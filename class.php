<?php 
class Text {
	public $text;

	function Text($_string){
		$this->text = $_string;
	}
}
class Message {
	public $messages;
}

class QuickReply{
	public $text;
	public $quick_replies;
	public $quick_reply_options;
}

class Title {
	public $title;
	public $set_attributes;
	function Title($_string,$_attribute){
		$this->title = $_string;
		$this->set_attributes = $_attribute;
	}
}

class Attribute {
	public $number;
	function Attribute($_number){
		$this->number = $_number;
	}
}

class QuickReplyOption{
	public $process_text_by_ai;
	public $text_attribute_name;
	function QuickReplyOption($_boolean,$_attributeName){
		$this->process_text_by_ai = $_boolean;
		$this->text_attribute_name = $_attributeName;
	}
}

 ?>