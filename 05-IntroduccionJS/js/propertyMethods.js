


console.warn('propertyMethods.js');
const reproductive = {
    reproduce: function(id) {
        console.log(`Reproduciendo la canción con el id: ${id}`);
    },
    pause: function() {
        console.log('Pausando la canción');
    },
    createPlayList: function(name) {
        console.log(`Creando la playlist con el nombre: ${name}`);
    },
    reproducePlayList: function(name) {
        console.log(`Reproduciendo la playlist con el nombre: ${name}`);
    },
    deletePlayList: function(name) {
        console.log(`Eliminando la playlist con el nombre: ${name}`);
    }
}
reproductive.clearSong = function(id) {
    console.log(`Limpiando la canción con el id: ${id}`);
}
reproductive.reproduce(30);
reproductive.pause();
reproductive.clearSong(30);
reproductive.createPlayList('Rock 90s');
reproductive.reproducePlayList('Rock 90s');
reproductive.deletePlayList('Rock 90s');