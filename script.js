const enviar = () => {
    const ventanaEnvio = window.open(
        "./respuestaform.html",
        "envió exitoso"
    );
    setTimeout(() => {
        ventanaEnvio.close();
    }, 3000);
};