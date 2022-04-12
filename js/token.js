function random() {
    r = Math.random().toString(36).substr(2); // Eliminar `0.`
    return r;
};
 
function token() {
    t = random() + random(); // Para hacer el token más largo
    return t;
};
 
alert(token());

