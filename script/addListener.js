const updateQuantity = {};

const grabNode = (className, callback) => {
  grabPart = Array.from(document.getElementsByClassName(className));
  grabPart.map((key) => {
    callback(key);
  });
};

const addToCart = (className, callback, grabClassName = ".gBtn") => {
  grabPart = Array.from(document.getElementsByClassName(className));
  grabPart.map((key) => {
    const btn = key.querySelector(grabClassName);
    btn.addEventListener("click", () => {
      id = btn.getAttribute("data-id");
      callback(id);
    });
  });
};

const callback = async (id) => {
  const response = await fetch(
    `http://localhost/Database/model/removeOrder.php?id=${id}`
  );
  console.log(`http://localhost/Database/model/removeOrder.php?id=${id}`);
    window.location = window.location;
};
const hndlQuantity = () => {
  alert(30);
};
addToCart("order", callback);

grabNode("order", (key) => {
  const incremnt = key.querySelector(".increment");
  const decremnt = key.querySelector(".decrement");
  const quantity = key.querySelector(".gQuantity");

  incremnt.addEventListener("click", () => {
    const foodID = quantity.getAttribute("food-id");
    quantity.innerHTML = parseInt(quantity.innerHTML) + 1;
    updateQuantity[`i-${foodID}`] = quantity.innerHTML;
  });
  decremnt.addEventListener("click", () => {
    const foodID = quantity.getAttribute("food-id");

    quantity.innerHTML = Math.max(1, parseInt(quantity.innerHTML) - 1);
    updateQuantity[`i-${foodID}`] = quantity.innerHTML;
  });

  
});

const hndlSubmit=()=>{
    const submit = document.querySelector(".button");
    
    const hndlEvent=async(id, nQuantity)=>{
      const res = await fetch(`http://localhost/src/hndlcheckout.php?id=${id}&quantity=${nQuantity}`);
 
      return res.text()
            
    }
    submit.addEventListener("click", () => {
        const promises = []

        Object.keys(updateQuantity).map((key)=>{
            const id = parseInt(key.replace('i-',''))
            const nQuantity = parseInt(updateQuantity[key]);
            promises.push(hndlEvent(id, nQuantity))
            
        })
         
        Promise.all(promises).
        then( (res)=>{
          window.location = 'placeOrder.php'
        }).
        catch((e)=>{ alert(e); window.location = location})
    
    
      });
}
hndlSubmit()