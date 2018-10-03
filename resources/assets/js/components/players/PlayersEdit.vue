<template>
    <div>
        <div class="form-group">
            <router-link to="http://test.rinconmountaintech.com/sites/lhptest/public/admin/players/#/admin/players" class="btn btn-default">Back</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Edit player</div>
            <div class="panel-body">
                <form v-on:submit="saveForm()">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">First Name</label>
                            <input type="text" v-model="player.first_name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Last Name</label>
                            <input type="text" v-model="player.last_name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <button class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            app.playerId = id;
            axios.get('http://test.rinconmountaintech.com/sites/lhptest/public/api/v1/players/' + id)
                .then(function (resp) {
                    app.player = resp.data;
                })
                .catch(function () {
                    alert("Unable to load player record")
                });
        },
        data: function () {
            return {
                playerId: null,
                player: {
                    first_name: '',
                    last_name: ''
                }
            }
        },
        methods: {
            saveForm() {
                var app = this;
                var newPlayer = app.player;
                axios.patch('http://test.rinconmountaintech.com/sites/lhptest/public/api/v1/players/' + app.playerId, newPlayer)
                    .then(function (resp) {
                        app.$router.replace('http://test.rinconmountaintech.com/sites/lhptest/public/admin/players#/admin/players');
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Unable to update player record");
                    });
            }
        }
    }
</script>