<template>
    <div data-app>
        <v-toolbar>

            <v-toolbar-title>Simple task</v-toolbar-title>
            <v-spacer></v-spacer>
            <div class="hidden-sm-and-down">
                <router-link
                        v-for="item in items"
                        :key="item.title"
                        :to="item.to">
                    <v-btn text>{{item.title}}</v-btn>
                </router-link>
            </div>
        </v-toolbar>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                items: [

                    {title: 'Add Record', to: '/addrecored'},
                ]
            }
        },
    }
</script>
<style></style>