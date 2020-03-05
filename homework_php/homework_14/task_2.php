<?php  
$news = [ 

	'news1' => ['topic' => 'СЗО обяви извънредно положение заради коронавируса', 'date' => '30.01', 'news'=>'Извънредно положение заради настъпващия по света коронавирус. Това обяви Световната здравна организация (СЗО) след проведено днес спешно заседание.Вирусът вече е обявен като "глобална пандемия".Това обяви генералният директор на СЗО Тедрос Аданом Гебрейесус.Припомняме, че по-рано СЗО коригира предварителната си оценка за разпространението и призна, че е подценила проблема.Коронавирусът е достигнал до всеки регион в континентален Китай. По-рано китайските здравни власти съобщиха, че има данни за 7 800 проблема отвърдени случаи в страната към 30 януари.' ],
	'news2' => ['topic' => 'БСП иска България в Еврозоната', 'date' => '30.01', 'news' =>'БСП винаги със своите действия и гласувания е подкрепяла присъединяването на страната към Еврозоната. Това, което не подкрепяме, е начинът и подходът, по който се случват тези промени, които управляващите обясняват като формални и задължителни за приемането на страната в чакалнята на еврозоната.' ],
	'news3'=> ['topic'=> 'Васил Божков арестуван', 'date'=> '31.01 ', 'news' => 'Васил Божков е задържан в арабските страни. Това съобщи главният прокурор Иван Гешев пред журналисти. Информацията все още е на ниво неофициални канали, но информацията е почти напълно сигурна. Иван Гешев посети на място акцията по залавянето на кокаин в района на борсата в столичния квартал Слатина. Иван Гешев посочи, че вярва на съдебната система на Обединените арабски емирства. Той благодари за сътрудничеството на ОАЕ.'],
	'news4'=> ['topic'=> 'Великобритания официално напусна ЕС', 'date'=> '31.01 ', 'news' => 'Обединеното кралство официално напусна Европейския съюз. Това става след повече от три години от провеждането на референдума, който остави страната горчиво разделена, припомня ЕС.Излизането от Общността слага край на политическите раздори, които понякога парализираха Уестминстър, сложиха край на ръководството на двама премиери, но и доведоха до парламент на Обединеното кралство с най-голямото консервативно мнозинство от годините на Маргарет Тачър.'],
	'news5'=> ['topic'=> 'Макрон: Брекзит е шок', 'date'=> '31.01 ', 'news' => 'Това напускане е шок. Това е исторически сигнал за тревога.Това заяви в специално обръщение френският президент Еманюел Макрон. Той не пропусна да призове посланието за Брекзит да бъде чуто от цяла Европа и да накара ЕС да се замисли.Брекзит стана възможен, защото ние не променихме достатъчно нашата Европа, призна Еманюел Макрон.'],
	'news6'=> ['topic'=> 'Над 100 кг кокаин открити в кв. "Слатина"', 'date'=> '31.01 ', 'news' => 'При международна операция в София са задържани голямо количество наркотици - над 100 кг кокаин. Дрогата е спипана в района на Зеленчуковата борса на столичния кв. "Слатина". Главният прокурор Иван Гешев и главният секретар на МВР Ивайло Иванов пътуват към мястото, научи "24 часа" от свои източници. Засега не се съобщава откъде идват наркотиците. Според "Нова телевизия" става дума за десетки килограми дрога, които са били импрегнирани в кашони.'],


];

$count = 0;
foreach ($news as $key => $value) {
	echo $news[$key]['topic']. " ";
	echo $news[$key]['date']. " ";
	echo substr($news[$key]['news'], 0, 59). "<br> " ;
	$count++;
	if ($count == 5) {
		break;
	}
}