document.addEventListener('DOMContentLoaded', function() {
    const btnImprimir = document.querySelector('.btn-imprimir');
    
    btnImprimir.addEventListener('click', function() {
        // Agregar clase especial para impresión
        document.body.classList.add('impresion-activa');
        
        // Activar impresión nativa del navegador
        window.print();
        
        // Remover clase después de imprimir
        setTimeout(() => {
            document.body.classList.remove('impresion-activa');
        }, 500);
    });
});