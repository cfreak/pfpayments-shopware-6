<?php declare(strict_types=1);

namespace PostFinanceCheckoutPayment\Resources\app\storefront\src\snippets\en_GB;

use Shopware\Core\System\Snippet\Files\SnippetFileInterface;

class SnippetFile_en_GB implements SnippetFileInterface {
	public function getName(): string
	{
		return 'postfinancecheckout.en-GB';
	}

	public function getPath(): string
	{
		return __DIR__ . '/postfinancecheckout.en-GB.json';
	}

	public function getIso(): string
	{
		return 'en-GB';
	}

	public function getAuthor(): string
	{
		return 'PostFinance Checkout';
	}

	public function isBase(): bool
	{
		return false;
	}
}
