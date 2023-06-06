<template>
    <form @submit.prevent="submitForm">
        <input v-model="form.nombre" type="text" placeholder="Nombre">
        <input v-model="form.apellidos" type="text" placeholder="Apellidos">
        <input v-model="form.documento" type="text" placeholder="Documento">
        <input v-model="form.direccion" type="text" placeholder="Dirección">
        <input v-model="form.telefono" type="text" placeholder="Teléfono">
        <input v-model="form.email" type="email" placeholder="Email">
        <button type="submit">Enviar</button>
    </form>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            form: {
                nombre: '',
                apellidos: '',
                documento: '',
                direccion: '',
                telefono: '',
                email: ''
            }
        }
    },
    methods: {
        async submitForm() {
            try {
                let response = await axios.post('/cliente', this.form);
                console.log(response.data);
                this.form.nombre = '';
                this.form.apellidos = '';
                this.form.documento = '';
                this.form.direccion = '';
                this.form.telefono = '';
                this.form.email = '';
            } catch (error) {
                console.log(error);
            }
        }
    }
}
</script>
