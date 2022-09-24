const addToCart = () => {
  pushDataToCart();
  grabCartButtons = Array.from(document.getElementsByClassName("cartButton"));
  grabCartButtons.map((key) => {
    const foodId = `id= ${key.getAttribute("data-id")}`;
    key.addEventListener("click", () => {
      pushDataToCart(foodId);
    });
    return 1;
  });
};

const pushDataToCart = async (foodId = null) => {
 
  displayMsg = document.getElementById("msg");
  cartElement = document.getElementById("grabCart");
  const response = await fetch(`http://localhost/src/cartJson.php?${foodId}`);
  const data = await response.json();
  cartElement.innerHTML = `${data.nProductInCart}`;
 
  if(foodId !=null){ 
    displayMsg.innerHTML = `${data.msg}`;
    setTimeout(()=>{
        displayMsg.innerHTML = ``
    },700)
    }
};

// const fetchData=async()=>{
//     const response = await fetch('http://localhost/src/cartJson.php');
//     return await response.json();
// }

addToCart();
