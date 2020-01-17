<template>
    <div>
        <div class="row">
            <h3>Create user</h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form v-on:submit="saveUser()">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" required v-model="user.name">
                        <br>
                        <input type="text" class="form-control" name="position" required v-model="user.position">
                        <br>
                        <input type="date" class="form-control" name="birthday" required v-model="user.birthday">
                        <br>
                        <button class="btn btn-success">Submit</button>
                        <router-link :to="{name: 'listUser'}" class="btn btn-xs btn-default">Back</router-link>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function ()
        {
            return {
                user: {
                    name: '',
                    position: '',
                    birthday: '',
                }
            }
        },
        methods: {
            saveUser()
            {
                event.preventDefault();
                let app = this;
                axios.put( '/api/company/create', app.user )
                    .then(
                        function ( resp )
                        {
                            app.$router.push( { path: '/' } );
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
</script>
