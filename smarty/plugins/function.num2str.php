<?php
function smarty_function_num2str($params, &$smarty)
{
$str[100]= array('','���','������','������','���������','�������','��������',
'�������', '���������','���������','������');
$str[11] = array(10=>'������',11=>'�����������',12=>'����������',
13=>'����������',14=>'������������',15=>'����������',
16=>'�����������',17=>'����������',18=>'������������',
19=>'������������');
$str[10] = array('','','��������','��������','�����','���������',
'����������','���������','�����������','���������','���');
$sex[1] = array('','����','���','���','������','����','�����','����',
'������','������');
$sex[2] = array('','����','���','���','������','����','�����','����',
'������','������');
$forms = array(
-1=>array('�������', '�������', '������', 2),
0 =>array('�����', '�����', '������', 1), // 10^0
1 =>array('������', '������', '�����', 2), // 10^3
2 =>array('�������', '��������', '���������', 1), // 10^6
3 =>array('��������','���������','����������',1), // 10^9
4 =>array('��������','���������','����������',1), // 10^12
);
$out = $tmp = array();
// �������!
$inn=$params['inn'];

$tmp = explode('.', str_replace(',','.', $inn));
$rub = number_format($tmp[0],0,'','-');
// ������������ ������
$kop = isset($tmp[1]) ? str_pad(substr($tmp[1],0,2), 2, '0', STR_PAD_LEFT) : '00';
$levels = explode('-', $rub);
$offset = sizeof($levels)-1;
foreach($levels as $k=>$lev) {
$lev = str_pad($lev, 3, '0', STR_PAD_LEFT); // ������������
$ind = $offset-$k; // ������ ��� $forms
if ($lev[0]!='0') $out[] = $str[100][$lev[0]]; // �����
$lev = $lev[1].$lev[2];
$lev = (int)$lev;
if ($lev > 19) { // ������ ������������
$lev = ''.$lev;
$out[] = $str[10][$lev[0]];
$out[] = $sex[$forms[$ind][3]][$lev[1]];
}
else if ($lev>9) {
$out[] = $str[11][$lev];
}
else if ($lev>0) {
$out[] = $sex[$forms[$ind][3]][$lev];
}
if ($lev>0 || $ind==0) {
$out[] = pluralForm($lev, $forms[$ind][0], $forms[$ind][1] ,$forms[$ind][2] );
}
}
if (!isset($params['stripkop'])) {
$out[] = $kop; // �������
$out[] = pluralForm($kop, $forms[-1][0], $forms[-1][1] ,$forms[-1][2] );
}
return implode(' ',$out);
}

function pluralForm($n, $f1, $f2, $f5) {
$n = abs($n) % 100;
$n1 = $n % 10;
if ($n > 10 && $n < 20) return $f5;
if ($n1 > 1 && $n1 < 5) return $f2;
if ($n1 == 1) return $f1;
return $f5;
}



?> 