
const cargarMed = async()=>{
    let r = await axios.get("api/med/get");
    let med = r.data;
    let medSelect = document.querySelector("#med-select");
    med.forEach(element => {
        let o = document.createElement("option");
        o.innerText = element;
        medSelect.appendChild(o);        
    });
    
};

const cargarTmed = async()=>{
    let r = await axios.get("api/tmed/get");
    let med = r.data;
    let medSelect = document.querySelector("#tmed-select");
    med.forEach(element => {
        let o = document.createElement("option");
        o.innerText = element;
        medSelect.appendChild(o);        
    });
    
};

cargarMed();
cargarTmed();

document.querySelector("#registrar-btn").addEventListener("click", ()=>{
    let fecha = document.querySelector("#fecha-txt").value;
    let hora = document.querySelector("#hora-txt").value;
    let med = document.querySelector("#med-select").value;
    let dir = document.querySelector("#dir-txt").value;
    let tmed = document.querySelector("#tmed-select").value;
    datos.fecha = fecha;
    datos.hora = hora;
    datos.med = med;
    datos.dir = dir;
    datos.tmed = tmed;
});