function showPage(pageId) {
  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  document.getElementById(pageId).classList.add('active');
}

document.getElementById("sendMessage").addEventListener("click", function(){
    setTimeout(function(){
        document.querySelector("form").reset();
    },500);
});