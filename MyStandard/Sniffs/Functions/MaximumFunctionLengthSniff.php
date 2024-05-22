<?php

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;

class MyStandard_Sniffs_Functions_MaximumFunctionLengthSniff implements Sniff
{
    /**
     * The maximum allowed lines for a function.
     *
     * @var int
     */
    public $maxLength = 50;

    /**
     * Registers the tokens that this sniff wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return [T_FUNCTION];
    }

    /**
     * Processes the tokens that this sniff is interested in.
     *
     * @param  File  $phpcsFile The file being scanned.
     * @param  int  $stackPtr The position of the current token in the stack passed in $tokens.
     * @return void
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        // Find the opening brace of the function.
        $openBrace = $tokens[$stackPtr]['scope_opener'];

        // Find the closing brace of the function.
        $closeBrace = $tokens[$stackPtr]['scope_closer'];

        // Calculate the number of lines in the function.
        $startLine = $tokens[$openBrace]['line'];
        $endLine = $tokens[$closeBrace]['line'];
        $numLines = $endLine - $startLine + 1;

        // Check if the number of lines exceeds the maximum.
        if ($numLines > $this->maxLength) {
            $phpcsFile->addError(
                sprintf(
                    'Function length (%d lines) exceeds the maximum allowed length of %d lines.',
                    $numLines,
                    $this->maxLength
                ),
                $stackPtr,
                'MaxExceeded'
            );
        }
    }
}
