<html>

<head>
    <title>行程與報名表</title>
    <meta charset="utf-8"> 
</head>

<body bgcolor="#FFF2E9" text="#7D5B64">
    <center>
        <font face="標楷體" font size="6"><b>國立高雄大學資訊管理學系116級迎新活動報名</b></font>
        <hr width="80%" color="8E656F">

        <font face="標楷體" font size="4">
            <p><b>📅 活動行程表 📅</b></p>
            <p>以下是本次迎新活動的行程與報名截止時間，請務必確認後再填寫報名表單。</p>
        </font>
        <table border="1" width="500" bgcolor="#FAF2E1">
        <tr align="center" bgcolor="#FCEBD3"><td><b>名稱</b></td><td><b>活動日期</b></td><td><b>報名截止日期</b></td></tr>
        <tr align="center"><td><b>電競</b></td><td>12/2（一）</td><td>11/29</td></tr>
        <tr align="center"><td><b>制服趴</b></td><td>12/4（三）</td><td>11/29</td></tr>
        <tr align="center"><td><b>躲貓貓</b></td><td>12/10（二）</td><td>12/1</td></tr>
        <tr align="center"><td><b>酒精路跑</b></td><td>12/13（五）</td><td>12/4</td></tr>
        </table>

        <font face="標楷體" font size="4">
            <p><b>✒️ 填寫表單 ✒️</b></p>
        </font>
        <form action="a1123338_info.php" method="GET">
            姓名： <input type="text" name="uName"><br>
            性別：
                <input type="radio" name="uGender" value="男">男
                <input type="radio" name="uGender" value="女">女
                <input type="radio" name="uGender" value="其他">其他
            <br>
            生日： <input type="date" name="uBD"><br>
            手機： <input type="tel" name="uPhone"><br>
            信箱： <input type="email" name="uEmail"><br>
            活動： 
                <input type="checkbox" name="uEvent[]" value="電競">電競
                <input type="checkbox" name="uEvent[]" value="制服趴">制服趴
                <input type="checkbox" name="uEvent[]" value="躲貓貓">躲貓貓
                <input type="checkbox" name="uEvent[]" value="酒精路跑">酒精路跑
            <br>
            期待程度：<input type="range" name="uLike"><br>
            活動建議：<br>
                <textarea cols="30" rows="10" name="uComment"></textarea><br>
            
            <p>
                <input type="submit" value="提交" style="background-color:#FCEBD3">
                <input type="reset" value="重設" style="background-color:#FCEBD3">
            </p>
        </form>

        <font face="標楷體" size="4">
            <a href="a1123338_intro.html"><b>返回首頁</b></a>
        </font>

    </center>
</body>

</html>