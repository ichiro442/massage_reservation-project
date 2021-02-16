<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2"></script> -->
    <title>確認画面</title>
</head>
<body class="app flex">
<img class="bodyImg" src="img/aozora.jpeg" alt="">
    <div class="confirm_wrapper flex">
        <div class="confirm_container flex">
        <h3>以下の内容で送信してよろしいですか？</h3>
            <form action="" class="confirmBox flex">
                <table>
                    <tr>
                        <td width="200">名前</td>
                         <td width="1000" >Doe</td>
                    </tr>
                    <tr>
                        <td width="200">電話番号</td>
                        <td width="1000">Doe</td>
                    </tr>
                    <tr>
                        <td width="200">メール <br> アドレス</td>
                        <td width="1000">Doe</td>
                    </tr>
                    <tr>
                        <td width="200">日にち</td>
                        <td width="1000">Doe</td>
                    </tr>
                    <tr>
                        <td width="200">時間帯</td>
                        <td width="1000">Doerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr</td>
                    </tr>
                </table>
                <!-- <span class="confirmcontent"><p class="confirmDetail">お名前  rrr</p></span>
                <span class="confirmcontent"><p class="confirmDetail">お電話番号  tttt</p></span>
                <span class="confirmcontent"><p class="confirmDetail">メールアドレス  cccc</p></span>
                <span class="confirmcontent"><p class="confirmDetail">日にち  fff</p></span>
                <span class="confirmcontent"><p class="confirmDetail">時間  bbb</p></span> -->
                <div class="comfirm_btns flex">
                    <div class="comfirm_btn button">
                        <a class="backBtn button" href="/reservation">戻る</a>
                    </div>
                    <div class="sendBtns">
                        <!-- <input class="sendBtn" type="button" value="送信"> -->
                        <button class="sendBtn button">送信</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
    <!-- <script>
          var app = new Vue({
        el: "#app",
        data: {
          show: false,
          times: '',	
        },
        methods: {
          choiceMorning: function(time){
            this.times = 'choiceMorning'
          },
          choiceAfternoon: function(time){
            this.times = 'choiceAfternoon'
          },
          choiceNight: function(time){
            this.times = 'choiceNight'
          },
        }
      });
    </script> -->
</body>
</html>