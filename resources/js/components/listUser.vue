<template>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">=</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user, index in users">
                    <th scope="row">{{ user.id }}</th>
                    <td>{{ user.name }}</td>
                    <td>{{ user.position }}</td>
                    <td>{{ user.birthday }}</td>
                    <td>
                        <a v-bind:href="'/' + user.id + '/edit'" class="btn btn-xs">EDIT</a>
                        <a href="#" class="btn btn-xs btn-danger" v-on:click="deleteUser( user.id, index )">REMOVE</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                users: []
            }
        },
        mounted() {
            let app = this;
            axios.get('/api/company')
                .then(function (resp) {
                    app.users = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                });
        },
        methods: {
            deleteUser(id, index) {
                if ( confirm("Вы действительно хотите удалить?") ) {
                    let app = this;
                    axios.delete('/api/company/remove/' + id)
                        .then(function (resp) {
                            app.users.splice(index, 1);
                        })
                        .catch(function (resp) {
                            console.log(resp);
                        });
                }
            }
        }
    }
</script>
