<html>
<head><title>留言板</title>
</head>
<?php 
$xml = simplexml_load_file('./部门名称.xml');
?>
<body>
<h3 align="center"> 留 言 板</h3>

<P><BR><P>

<p align="center"><a href=login.php>管理员登录</a>
<P><BR><BR>
<TABLE align="center" border=0>
<TR bgColor=#B02021>
<TD>
<TABLE border=0>
<TR bgColor=#ffffff>
<TD>
<TABLE border=0>

<TR bgColor=#F0F0FF>

<?php 
foreach ($xml->name as $name)
{
    echo "<td nowrap align=center width=100>";
    echo "<BR><a href=list.php?department=jwch><B>".$name."</B></a>";
    echo "</td>";
}
?>
<td nowrap align=center width=100>
<BR><a href=list.php?department=jwch><B>教务信息</B></a>

<td nowrap align=center width=100>
<BR><a href=list.php?department=xsc><B>学生处</B></a>

<td nowrap align=center width=100>
<BR><a href=list.php?department=Lib><B>图书馆</B></a>
</table>
</table>
</table>
</body>
</html>