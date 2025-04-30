<template>
    <div>
        <h1>Registro con Vue.js</h1>

        <div v-if="errors.length" class="alert alert-danger">
            <ul>
                <li v-for="(error, index) in errors" :key="index">{{ error }}</li>
            </ul>
        </div>

        <form @submit.prevent="register">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" id="name" v-model="form.name" class="form-control" required autofocus>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico:</label>
                <input type="email" id="email" v-model="form.email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" id="password" v-model="form.password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmar Contraseña:</label>
                <input type="password" id="password_confirmation" v-model="form.password_confirmation" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Teléfono (Opcional):</label>
                <input type="text" id="phone" v-model="form.phone" class="form-control">
            </div>

            <div class="mb-3">
                <label for="profile_picture" class="form-label">Foto de Perfil (Opcional):</label>
                <input type="file" id="profile_picture" @change="handleFileUpload" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>

        <p class="mt-3">¿Ya tienes una cuenta? <a href="/login">Iniciar Sesión</a></p>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                form: {
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                    phone: '',
                    profile_picture: null,
                },
                errors: [],
            };
        },
        methods: {
            handleFileUpload(event) {
                this.form.profile_picture = event.target.files[0];
            },
            async register() {
                this.errors = [];

                const formData = new FormData();
                for (const key in this.form) {
                    formData.append(key, this.form[key]);
                }

                try {
                    const response = await axios.post('/register', formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    });

                    // Redirigir al usuario después del registro exitoso
                    window.location.href = '/home'; // Cambia '/home' por la ruta deseada
                } catch (error) {
                    if (error.response && error.response.data && error.response.data.errors) {
                        this.errors = Object.values(error.response.data.errors).flat();
                    } else {
                        this.errors.push('Ocurrió un error al registrarse.');
                    }
                }
            },
        },
    };
</script>

<style scoped>
   
</style>