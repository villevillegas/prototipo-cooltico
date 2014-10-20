var namee;
function change(namee) {

    ocultaTodo();
    var livetab, i;
    switch (namee) {
        case 'tab1':
            livetab = 't1';
            montandoProductos();
            break;
        case 'tab2':
            livetab = 't2';
            montandoCategorias();
            break;
        case 'tab3':
            livetab = 't3';
            montandoReportes();
            break;
    }


}