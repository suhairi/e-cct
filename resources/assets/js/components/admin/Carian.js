var emailRE = '^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$';

const apps = new Vue({
    el: "#carian_users",

    data: { 
        my_users: [],

        newUser: {
            id: '',
            name: '',
            email: '',
            password: '',
            level: []
        },

        message: "hello",
        edit: false


    },

    ready: function() {
        this.fetchUsers();
    },

    methods: {
        fetchUsers: function() {
            $.getJSON('/admin/user/API/users', function(users) {
                this.$set('my_users', users)
            }.bind(this));
           
        },

        addUser: function() {
            var user = this.newUser;

            this.newUser = { id:'', name:'', email:'', password:'', level:'' }

            this.$http.post('/admin/user/API/users', user);

            alert('Berjaya. Pengguna telah didaftarkan!');
            this.fetchUsers();

        },

        deleteUser: function(user) {

            var confirmBox = confirm('Anda pasti?');

            if(confirmBox) {
                this.my_users.$remove(user);
                this.$http.delete('/admin/user/API/users/' + user.id);
            }

        },

        updateUser: function(user) {

            this.edit = true;

            // initialize the new_user type
            var new_user = this.newUser;

            $.getJSON('/admin/user/API/users/' + user.id, function(data) {
                new_user.id     = data.id;
                new_user.name   = data.name;
                new_user.email  = data.email;
                new_user.level  = data.level;
            });
        },

        editUser: function(id) {

            console.log(id);
            var user = this.newUser;          
            
            this.newUser = { id:'', name:'', email:'', password:'', level:'' }

            this.$http.put('/admin/user/API/users/' + id, user, function(data) {
                console.log(data);
            });

            this.edit = false;

            alert('Berjaya. Pengguna telah dikemaskini!');

            this.fetchUsers();
        }
        
    }






});