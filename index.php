<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-database.js"></script>

<link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css'>

        <link rel="stylesheet" href="css/style.css">

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAFOUcTPdF_jUvUYBrzTx7GkHtOYrj2PPI",
    authDomain: "real-time-chat-fa2e5.firebaseapp.com",
    databaseURL: "https://real-time-chat-fa2e5-default-rtdb.firebaseio.com",
    projectId: "real-time-chat-fa2e5",
    storageBucket: "real-time-chat-fa2e5.firebasestorage.app",
    messagingSenderId: "228595819251",
    appId: "1:228595819251:web:67d1b5d838d67d36934d86"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  firebase.database().ref("messages").on("child_removed", function (snapshot) {
    document.getElementById("message-" + snapshot.key).innerHTML = "This message has been deleted";
  });

  function deleteMessage(self) {
    var messageId = self.getAttribute("data-id");
    firebase.database().ref("messages").child(messageId).remove();
  }

  function sendMessage() {
    var message = document.getElementById("message").value;
    firebase.database().ref("messages").push().set({
      "message": message,
      "sender": myName
    });
    return false;
  }
</script>

<style>
  figure.avatar {
    bottom: 0px !important;
  }
  .btn-delete {
    background: red;
    color: white;
    border: none;
    margin-left: 10px;
    border-radius: 5px;
  }
</style>

<div class="chat">
  <div class="chat-title">
    <h1>bae🩵</h1>
    <h2>Typing...</h2>
    <figure class="avatar">
      <img src="https://p7.hiclipart.com/preview/349/273/275/livechat-online-chat-computer-icons-chat-room-web-chat-others.jpg" /></figure>
  </div>
  <div class="messages">
    <div class="messages-content"></div>
  </div>
  <div class="message-box">
    <textarea type="text" class="message-input" id="message" placeholder="Type message..."></textarea>
    <button type="submit" class="message-submit">Send</button>
  </div>

</div>
<div class="bg"></div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'></script>

        <script src="js/index.js?v=<?= time(); ?>"></script>

<style>
    .fixed-bottom {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: lightseagreen;
        color: white;
        text-align: center;
        padding: 25px;
        font-size: 20px;
    }
</style>

<div class="footer fixed-bottom">
    Get an image sharing web app in Node JS and Mongo DB for just <b>$20</b>. <a style="color: greenyellow;" href="https://wa.me/+919661674920">Contact Us</a>
</div>