let products = {
    data: [
      {
        productName: "Redmi Kentang GG",
        category: "Handphone",
        location: "Makassar",
        founder: "asep tubeless",
        image: "assets/img/hp.jpg",
      },
      {
        productName: "Redmi Kentang GG",
        category: "Handphone",
        location: "Makassar",
        founder: "saman brembo",
        image: "assets/img/hp.jpg",
      },
      {
        productName: "Dompet coklat",
        category: "Dompet",
        location: "Maros",
        founder: "ujang kopling",
        image: "assets/img/dompet.jpeg",
      },
      {
        productName: "Dompet hitam",
        category: "Dompet",
        location: "Gowa",
        founder: "asep jajang",
        image: "assets/img/dompet hitam.jpg",
      },
      {
        productName: "Dompet jelek",
        category: "Dompet",
        location: "Perintis",
        founder: "Rafif turu",
        image: "assets/img/dompetjelek.jpeg",
      },
      {
        productName: "Kunci Jatuh",
        category: "Kunci",
        location: "Sekitar PNUP",
        founder: "Arip solar",
        image: "assets/img/kunci.jpg",
      },
      {
        productName: "Jam Tangan kuning",
        category: "Bendalain",
        location: "Mushollah pnup",
        founder: "rido neutron",
        image: "assets/img/jam.jpeg",
      },
      {
        productName: "Jam Tangan",
        category: "Bendalain",
        location: "Rusdi barber",
        image: "assets/img/jam2.jpg",
      },
    ],
  };

for (let i of products.data) {

    let card = document.createElement("div");

    card.classList.add("card", i.category, "hide");

    let imgContainer = document.createElement("div");
    imgContainer.classList.add("image-container");

    let image = document.createElement("img");
    image.setAttribute("src", i.image);
    imgContainer.appendChild(image);
    card.appendChild(imgContainer);

    let container = document.createElement("div");
    container.classList.add("container");

    let name = document.createElement("h5");
    name.classList.add("product-name");
    name.innerText = i.productName.toUpperCase();
    container.appendChild(name);

    let founder = document.createElement("h6");
    founder.innerText =i.founder;
    container.appendChild(founder);
    card.appendChild(container);
    document.getElementById("products").appendChild(card);

    let location = document.createElement("h6");
    location.innerText =i.location;
    container.appendChild(location);
    card.appendChild(container);
    document.getElementById("products").appendChild(card);
  }

  function filterProduct(value) {

    let buttons = document.querySelectorAll(".button-value");
    buttons.forEach((button) => {

      if (value.toUpperCase() == button.innerText.toUpperCase()) {
        button.classList.add("active");
      } else {
        button.classList.remove("active");
      }
    });

    let elements = document.querySelectorAll(".card");

    elements.forEach((element) => {

      if (value == "all") {
        element.classList.remove("hide");
      } else {

        if (element.classList.contains(value)) {

          element.classList.remove("hide");
        } else {

          element.classList.add("hide");
        }
      }
    });
  }
 
  document.getElementById("search").addEventListener("click", () => {

    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".product-name");
    let cards = document.querySelectorAll(".card");

    elements.forEach((element, index) => {

      if (element.innerText.includes(searchInput.toUpperCase())) {

        cards[index].classList.remove("hide");
      } else {

        cards[index].classList.add("hide");
      }
    });
  });

  window.onload = () => {
    filterProduct("all");
  };