<template>
    <v-container>
        <v-form @submit.prevent="addRecord">
            <v-text-field
                    v-model="form.name"
                    label="First Name"
            ></v-text-field>
            <v-text-field
                    v-model="form.email"
                    label="E-mail"
            ></v-text-field>
            <v-text-field
                    v-model="form.address"
                    label="Address"
            ></v-text-field>
            <v-text-field
                    v-model="form.phone"
                    label="Mobile No"
            ></v-text-field>
            <v-text-field
                    v-model="form.password"
                    label="Password"
            ></v-text-field>
            <v-btn
                    color="green"
                    type="submit"
            >Submit
            </v-btn>



        </v-form>

    </v-container>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    email: null,
                    name: null,
                    phone: null,
                    address: null,
                    password: null
                }
            }
        },
        methods:{
            addRecord() {
                axios.post('/api/addrecored',this.form)
                    .then(res =>  console.log(res.data))
                    .catch(err => console.log(err.response.data))
            }
        }
    }
</script>