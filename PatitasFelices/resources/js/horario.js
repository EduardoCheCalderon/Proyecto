document.addEventListener("DOMContentLoaded", function() {
    const fechaInput = document.getElementById("fecha");
    const horaInput = document.getElementById("hora");

    fechaInput.addEventListener("input", () => {
        const fechaSeleccionada = new Date(fechaInput.value);
        const diaSemana = fechaSeleccionada.getDay();
        const horaInicio = diaSemana === 6 ? "10:00" : "08:00";
        const horaFin = diaSemana === 6 ? "15:00" : "17:00";
        var hoy = new Date();

        if (fechaSeleccionada <= hoy) {
            fechaInput.value = "";
        }

        horaInput.min = `${horaInicio}`;
        horaInput.max = `${horaFin}`;
        horaInput.value = "";
        horaInput.step = "3600"; // 3600 segundos = 1 hora
    });
});
