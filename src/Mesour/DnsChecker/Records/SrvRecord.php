<?php

declare(strict_types = 1);

namespace Mesour\DnsChecker;

/**
 * @author Matouš Němec <mesour.com>
 */
class SrvRecord extends DnsRecord
{

	/** @var int */
	private $priority;

	/** @var int */
	private $weight;

	/** @var int */
	private $port;

	/** @var string */
	private $target;

	/**
	 * @param string[]|int[] $record
	 */
	public function __construct(array $record)
	{
		$this->priority = $record['pri'];
		$this->weight = $record['weight'];
		$this->port = $record['port'];
		$this->target = $record['target'];

		$content = $this->priority . ' ' . $this->weight . ' ' . $this->port . ' ' . $this->target;

		parent::__construct($record['type'], $record['host'], $content, $record['ttl']);
	}

	public function getPriority(): int
	{
		return $this->priority;
	}

	public function getWeight(): int
	{
		return $this->weight;
	}

	public function getPort(): int
	{
		return $this->port;
	}

	public function getTarget(): string
	{
		return $this->target;
	}

}
