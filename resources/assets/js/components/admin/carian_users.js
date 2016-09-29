
const apps = new Vue({
    el: "#carian_users",
    data: function() {
            return {
                fa_users: [],
                message: "Suhairi"
            }
    },

    ready: function() {

        this.fetchUsers();

    },

    methods: {
        fetchUsers: function() {
            $.getJSON('/admin/user/API/users', function(users) {
                this.fa_users = users;
                console.log(users);
            }.bind(this));

            // $.getJSON('/admin/user/API/users', function (users) {            
            // this.fa_users = users;
            // }.bind(this))
        },  

        deleteUser: function(user) {
            this.fa_users.$remove(user);
        },

        updateUser: function(user) {
            var router = new VueRouter();

            router.go('/admin/user/update/' + user.id);
        }
    }
});