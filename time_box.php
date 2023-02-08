<body onload="ShowTime()" class="time_box">
    <div>現在時間為</div>
    <div id="showbox"></div>
</body>

<script language="JavaScript">
    function ShowTime() {
        var NowDate = new Date();
        var h = NowDate.getHours();
        var m = NowDate.getMinutes();
        var s = NowDate.getSeconds();
        document.getElementById('showbox').innerHTML = h + '時' + m + '分' + s + '秒';
        setTimeout('ShowTime()', 1000);
    }
</script>