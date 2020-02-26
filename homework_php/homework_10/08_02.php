<?php
$Masiv=["alskd","d","dfasidfjosdif","djfoi","sldkfspodijnspidvnpsdnvpsdov",""];
$length=count($Masiv);
$L=strlen($Masiv['0']);
$I=0;
for ($i=0; $i<$length; $i++)
	{if ($L<strlen($Masiv[$i]))
		{$L=strlen($Masiv[$i]);
			$I=$i;}
	}
echo "Най-дългият стринг е с дължина ".$L." - ".$Masiv[$I]."<br>";

$S=strlen($Masiv['0']);
$J=0;
for ($j=0; $j<$length; $j++)
	{if ($S>strlen($Masiv[$j]))
		{$S=strlen($Masiv[$j]);
			$J=$j;}
	}
echo "Най-късият стринг е с дължина ".$S." - ".$Masiv[$J];
