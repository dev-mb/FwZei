// © Dev-MB | dev-mb.dev

function getFormattedDate(date) {
   const tag = String(date.getDate()).padStart(2, '0');
   const monat = String(date.getMonth() + 1).padStart(2, '0'); // Monate sind 0-indexed
   return `${monat}${tag}`;
}

function getIMG() {
   const today = new Date();
   let imgdate = today;
   let imgsrc; 

   const urlParams = new URLSearchParams(window.location.search);
   const option = urlParams.get('day');

   if (option === "tomorrow") {
      imgdate.setDate(imgdate.getDate() + 1);

      imgsrc = `https://www.mais.de/sachsenforst/wb_${getFormattedDate(imgdate)}P.png`;
   } else if (option === "secondday") {
      imgdate.setDate(imgdate.getDate() + 2);

      imgsrc = `https://www.mais.de/sachsenforst/wb_${getFormattedDate(imgdate)}P0.png`;
   } else {

      imgsrc = `https://www.mais.de/sachsenforst/wb_${getFormattedDate(imgdate)}V.png`;
   }

   // const date = getFormattedDate(imgdate);

   const datumIMAGE = document.getElementById("waldindex");
   datumIMAGE.src = imgsrc;

   console.log(imgsrc);
}

// Initialisierung beim Laden der Seite
getIMG();

// https://www.mais.de/sachsenforst/