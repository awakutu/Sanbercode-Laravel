const items = [
  [
    "001",
    "Keyboard Logitek",
    60000,
    "Keyboard yang mantap untuk kantoran",
    "logitek.jpg",
  ],
  ["002", "Keyboard MSI", 300000, "Keyboard gaming MSI mekanik", "msi.jpg"],
  [
    "003",
    "Mouse Genius",
    50000,
    "Mouse Genius biar lebih pinter",
    "genius.jpeg",
  ],
  ["004", "Mouse Jerry", 30000, "Mouse yang disukai kucing", "jerry.jpg"],
];

const printItem = (array) => {
  let listBarang = "";
  for (let i = 0; i < array.length; i++) {
    listBarang += `
    <div class="col-md-4 mt-4">
        <div class="card" p-3">
            <img src="\\assets\\img\\${array[i][4]}" height ="210px" class="card-img-top" alt=${array[i][1]} />
            <div class="card-body">
              <h5 class="card-title" id="itemName">${array[i][1]}</h5>
              <p class="card-text" id="itemDesc">${array[i][3]}</p>
              <p class="card-text" id="itemPrice">${array[i][2]}</p>
              <button class="btn btn-primary" onclick="addCart()">Tambahkan ke keranjang</button>
            </div>
        </div>
    </div>
    `;
  }
  return listBarang;
};

document.getElementById("listBarang").innerHTML = printItem(items);


let valCart = parseInt(document.getElementById("cart_id").innerText);
window.addCart = () => {
  valCart += 1;
  document.getElementById("cart_id").innerText = valCart;
};

const filtering = (string) => {
    let filterdItems = [];
    for (let j = 0; j < items.length; j++) {
      let itemNameLowerCase = items[j][1].toLowerCase();
      let stringToLowerCase = string.toLowerCase();
      if (itemNameLowerCase.includes(stringToLowerCase))
        filterdItems.push(items[j]);
    }
    return filterdItems;
  };
  

let formSearch = document.getElementById("formItem");
formSearch.addEventListener("submit", (event) => {
  event.preventDefault();
  let keyword = document.getElementById("keyword").value;
  let  filteredItems = filtering(keyword);
  console.log(filteredItems);
  document.getElementById("listBarang").innerHTML= printItem(filteredItems);

});

