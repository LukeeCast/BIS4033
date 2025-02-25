var $ = function(id) {
  return document.getElementById(id);
};
function validateProductData() {
  // alert('in the function')
  var productDescription = $("product_description").value

  if(productDescription != "Guitars" && productDescription != "Pianos" && productDescription != "Other") {
    alert("Product Description not Correct");
    return false;
  }
  return true;
}

