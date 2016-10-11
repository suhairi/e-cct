

const App = new Vue({
    el: "#el_varieti",

    data: {
        varieties: [],

        edit: false,

        newVarieti: {
            code: '',
            name: '',
        },
    },

    

    ready: function() {
        this.fetchData()
    },

    computed: {
        validation: function() {
            return {
                name: !!this.newVarieti.name.trim(),
                code: !!this.newVarieti.code.trim()
            }
        },

        isValid: function() {
            var validation = this.validation;
            return Object.keys(validation).every(function(key) {
                return validation[key];
            });
        }
    },


    methods: {

        fetchData: function() {

            $.getJSON('/admin/varieti/API/index', function(data) {
                this.$set('varieties', data);
            }.bind(this));
        },


        addData: function() {

            var data = this.newVarieti;

            this.newVarieti = { id: '', name: '', code: '' };

            this.$http.post('/admin/varieti/API/new', data);

            alert("Berjaya. Varieti berjaya didaftarkan.");

            this.fetchData();

        },

        deleteData: function(id) {

            var confirmBox = confirm("Anda pasti?");

            if(confirmBox) {
                this.$http.delete('/admin/varieti/API/varieti/' + id);
                alert('Berjaya. Varieti berjaya dihapuskan.');
                this.fetchData();
            }
                       
        },

        updateData: function(data) {

            this.edit = true;

            var newVarieti = this.newVarieti;

            $.getJSON('/admin/varieti/API/index/' + data.id, function(varieti) {
                newVarieti.id   = varieti.id;
                newVarieti.name = varieti.name;
                newVarieti.code = varieti.code;
            });
        },

        editData: function(id) {

            console.log(id);
            var new_varieti = this.newVarieti;

            this.newVarieti = { id: '', name: '', code: ''};

            this.$http.put('/admin/varieti/API/update/' + id, new_varieti, function(data) {
                console.log(data)
            });

            this.edit = false;

            alert('Berjaya. Varieti berjaya dikemaskini.');

            this.fetchData();
        },

        batal: function() {
            this.edit = false;
            this.newVarieti = {id:'', name:'', code:''}
        }




    }


});