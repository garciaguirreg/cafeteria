const { createApp, ref } = Vue;

const app = Vue.createApp({
    data() {
        return {
            forms: {
                menu: { mostrar: false },
                reservas: { mostrar: false },
                contacto: { mostrar: false },
                
            },
            
            menuItems: [
                { nombre: 'Espresso', precio: '$2.50' },
                { nombre: 'Cappuccino', precio: '$3.00' },
                { nombre: 'Latte', precio: '$3.50' },
                // ... más items del menú
            ],
            contactoInfo: {
                direccion: '[Tu Dirección Aquí]',
                telefono: '[Tu Número de Teléfono Aquí]',
                email: '[Tu Correo Electrónico Aquí]'
            }
        };
    },
    methods: {
        abrirFormulario(componente) {
            this.forms[componente].mostrar = !this.forms[componente].mostrar;
        },
        
        enviarContacto() {
            
            alert('Mensaje de contacto enviado (funcionalidad futura)');
            this.forms.contacto.mostrar = false;
        },
        
    }
});

app.mount('#app');