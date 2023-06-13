//shop
let mydata = [];

$(document).ready(function () {
  console.log("ready!");
  $.ajax({
    method: "GET",
    url: "../php/getGoods.php",
    dataType: "json",
  }).done(function (res) {
    mydata = res;
    mydata.forEach(function (item) {
      if (item.id == "") return;
      let div_box = `
      
      <div class="col-12 col-md-6 col-lg-4 mt-4 item">
    <div class="card">
        <img src="${item.imgsrc}" class="card-img-top" alt="暫無照片">
          <div class="card-header d-flex justify-content-between">

          <h5 class="card-title">${item.name}</h5>
  </div>
        <div class="card-body">
           <h6 class="card-text pb-2 mb-3 border-bottom font-weight-bold">作者:${item.writter}</h6>
           <p class="card-text mb-0">簡介 :</p>
           <p class="card-text">${item.intro}</p>
           <p class="card-text">ISBN : ${item.ISBN}</p>
           <form action="../php/order-handler.php" method="POST">
          <button class="btn btn-primary mt-3" id="${item.id}" value="${item.id}" name="buyBtn">購買</button>
          </form>
        </div>
      </div></div> `;
      $("#box").append(div_box);
      console.log(div_box);
    });
  });
});
