const axios = require("axios");



// btn-submit-comment
document.getElementById('btn-submit-comment').addEventListener('click', ()=>{
    let commentReply = document.getElementById('textAreaExample').value;
    axios.post('/api/comment' , [commentReply]).then(()=>{
        console.log(commentReply);
    });
});



//<?php  echo $thumbFlame; ?>.addEventListener('click', function(<?php  echo $event; ?>) {
//    if (<?php  echo $event; ?>.target.src) {
//      <?php  echo $mainImage; ?>.src = <?php  echo $event; ?>.target.src;
  
