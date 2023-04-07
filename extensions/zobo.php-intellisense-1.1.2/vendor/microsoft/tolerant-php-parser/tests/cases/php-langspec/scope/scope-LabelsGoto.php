/* Auto-generated from php/php-langspec tests */
<?php

$v = TRUE;

if ($v)
{
	echo "Skipping echo\n";
	goto label1;
}

echo "Might skip over this\n";

label1:

//goto label2;	// can't jump into a function

function f1($p)
{
	if ($p) goto label2;

	echo "Should skip over this\n";

label2:
	echo "At label2 inside function " . __FUNCTION__ . "\n";
	if ($p)
	{
		$p = !$p;
		goto label2;	// can jump out of a block
	}
//	goto label1;	// can't jump out of a function

	goto label3;	// can jump in to a block

	{
	label3:
		echo "At label3\n";
//	label2:;	// 'label2' already defined in this scope
	label1:;	// OK; defined in outer scope
	}
}

f1(TRUE);

labelA:
echo "At labelA\n";
$v = !$v;
if ($v) goto labelA;
