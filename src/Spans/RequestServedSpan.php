<?php

namespace Anik\ElasticApm\Spans;

use Anik\ElasticApm\Contracts\SpanContract;

class RequestServedSpan implements SpanContract
{
    use SpanEmptyFieldsTrait;
    private $transactionName, $data;

    public function __construct (string $transactionName, array $data) {
        $this->transactionName = $transactionName;
        $this->data = $data;
    }

    public function getName () : string {
        return $this->transactionName;
    }

    public function getType () : string {
        return 'request';
    }

    public function getSubType () : string {
        return 'served';
    }

    public function getSpanData () : array {
        return $this->data;
    }
}