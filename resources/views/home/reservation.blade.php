<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <title>パートナーマッサージ</title>
  </head>
  <body class="flex">
    <!-- <div class="bodyImgs"> -->
      <img class="bodyImg" src="img/aozora.jpeg" alt="">
      <!-- <img class="bodyImg"  src="https://cdn.pixabay.com/photo/2016/06/09/03/03/sky-1445077_1280.jpg" alt=""> -->
    <!-- </div> -->
   <div id="app">
     <div class="container fadein flex">
       <h1 class="text-focus-in">心温</h1>
       <h2 class="fade-in-top">パートナーマッサージ専門</h2>
      <div class="internetBtns button fade-in-left  flex">
        <p class="internetBtn" type="button" @click="show=!show">ネット予約画面へ</p>
      </div>    
      <div v-show="show" class="reservationBox flex fadein_left">

      <div class="form_wrapper">
        <form action="">
          <div class="reservation flex">
            <p>お客様情報</p>
            <input type="text" placeholder="お名前" name="name" value="" />
            <input type="text" placeholder="お電話番号" name="phoneNumber" value="" />
            <input type="text" placeholder="メールアドレス" name="mail" value="" />
            <p>日にち選択</p>
            <input type="date" name="calender"/>
            <p>時間帯選択</p>
            <div class="timeChoices flex">
              <p class="timeChoice morning button" @click="choiceMorning('午前の部(10:00~12:00)')">午前の部(10:00~12:00)</p>
              <p class="timeChoice afternoon button" @click="choiceAfternoon('午後の部(14:00~16:00)')">午後の部(14:00~16:00)</p>
              <p class="timeChoice night button" @click="choiceNight('夜の部(18:00~20:00)')">夜の部(18:00~20:00)</p>
            </div>
            <p class="choiceResult" v-if="times === 'choiceMorning'">選択した時間帯<br>
              <span class="timeResult" style="background-color:#3232b3">午前の部(10:00~12:00)</span></p>
            <p class="choiceResult" v-else-if="times === 'choiceAfternoon'">選択した時間帯 <br>
              <span class="timeResult" style="background-color:#1c751c">午後の部(14:00~16:00)</span></p>
            <p class="choiceResult" v-else-if="times === 'choiceNight'">選択した時間帯<br>
              <span class="timeResult" style="background-color:#524646">夜の部(18:00~20:00)</span></p>
          </div>
          <div class="confirmBtn">
            <button<a class="button" href="/confirm">登録内容確認画面へ</a></button>
          </div>
        </form>
        <!-- <div class="colors flex">
          <span class="color1 color" style="background-color: red; ">①</span>
          <span class="color2 color" style="background-color:  blue;">②</span>
          <span class="color3 color" style="background-color:  green;">③</span>
          <span class="color4 color" style="background-color:  yellow;">④</span>
          <span class="color5 color" style="background-color:  pink;">⑤</span>
          <span class="color6 color" style="background-color:  orange;">⑥</span>
          <span class="color7 color" style="background-color:  blue;">⑦</span>
          <span class="color8 color" style="background-color:  fuchsia;">⑧</span>
          <span class="color9 color" style="background-color:  teal;">⑨</span>
          <span class="color10 color" style="background-color:  aliceblue;">⑩</span>
      </div> -->

      </div>
      </div>
      <div class="phoneResevation fadein">
        <p>電話予約はこちら</p>
        <a href="tel:03-3209-1111">03-3209-1111</a>
      </div>
   </div>
  </div>
    <script>
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
          // confirm: function(){
          //   console.log(confirm('登録内容を確認しますか？'));
          // }
        }
      });
    </script>
  </body>
</html>
