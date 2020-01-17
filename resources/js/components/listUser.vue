<template>
    <div>
        <div class="row">
            <h3>List users</h3>
        </div>

        <div class="row">
            <router-link :to="{name: 'createUser'}" class="btn btn-primary">Create</router-link>
        </div>

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
                        <router-link :to="{name: 'editUser', params: {id: user.id}}" class="btn btn-xs btn-default">EDIT</router-link>
                        <a href="#" class="btn btn-xs btn-danger" v-on:click="deleteUser( user.id, index )">REMOVE</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data: function ()
        {
            return {
                users: []
            }
        },
        mounted()
        {
            let app = this;
            axios.get( '/api/company' )
                .then(
                    function ( resp )
                    {
                        app.users = resp.data;
                    }
                )
                .catch(
                    function ( resp )
                    {
                        console.log( resp );
                    }
                );
        },
        methods: {
            deleteUser( id, index )
            {
                if ( confirm( "Вы действительно хотите удалить?" ) )
                {
                    let app = this;
                    axios.delete( '/api/company/remove/' + id )
                        .then(
                            function ( resp )
                            {
                                console.log( app.users );
                                app.users.splice( index, 1 );
                            }
                        )
                        .catch(
                            function ( resp )
                            {
                                console.log( resp );
                            }
                        );
                }
            }
        }
    }
</script>
