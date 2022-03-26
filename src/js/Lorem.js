let getLorem = function() {
  const url = "./php/api/get-lorem.php";
  var loremDiv = document.getElementsByClassName("loremIpsum");
  var downloadingImage = new Image(16, 16);
  downloadingImage.src = "./img/loading.gif";
  downloadingImage.alt = "loading...";
  loremDiv[0].appendChild(downloadingImage);
  fetch(url)
    .then(response => response.text())
    .then(function(data) {
      loremDiv[0].innerHTML = data;
    })
    .catch(function(err) {
      loremDiv[0].innerHTML = "Caught an error " + err;
    });
};
exports.getLorem = getLorem;
