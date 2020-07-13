let countries;

fetch("https://restcountries.eu/rest/v2/all")
.then(res => res.json())
.then(data => selectNames(data))

function selectNames(countriesData){
    countries = countriesData;
    let options = "";

    
    for(let i=0; i<countries.length; i++){
        options += `<option value="${countries[i].alpha3Code}">${countries[i].name}</option>`;
    }
    document.getElementById("countries").innerHTML = options;
}

// function searchCountry(){
//     document.getElementById("search_country").addEventListener("click", displayDate); 
// }

// ("#search_country").click(function click() {
//     alert( "Handler for .click() called.");
//   });

// const countriesList = document.getElementById("countries");
// let countries; 

// countriesList.addEventListener("change", newCountrySelection);

// function newCountrySelection(event) {
//   displayCountryInfo(event.target.value);
// }

// fetch("https://restcountries.eu/rest/v2/all")
// .then(res => res.json())
// .then(data => initialize(data))

// function initialize(countriesData) {
//   countries = countriesData;
//   let options = "";
//   countries.forEach(country => options+=`<option value="${country.alpha3Code}">${country.name}</option>`);
//   countriesList.innerHTML = options;

//   countriesList.selectedIndex = Math.floor(Math.random()*countriesList.length);
//   displayCountryInfo(countriesList[countriesList.selectedIndex].value);
// }

// function displayCountryInfo(countryByAlpha3Code) {
//   const countryData = countries.find(country => country.alpha3Code === countryByAlpha3Code);
//   document.querySelector("#flag-container img").src = countryData.flag;
//   document.querySelector("#flag-container img").alt = `Flag of ${countryData.name}`;  
//   document.getElementById("capital").innerHTML = countryData.capital;
//   document.getElementById("dialing-code").innerHTML = `+${countryData.callingCodes[0]}`;
//   document.getElementById("population").innerHTML = countryData.population.toLocaleString("en-US");
//   document.getElementById("currencies").innerHTML = countryData.currencies.filter(c => c.name).map(c => `${c.name} (${c.code})`).join(", ");
//   document.getElementById("region").innerHTML = countryData.region;
//   document.getElementById("subregion").innerHTML = countryData.subregion;
// }