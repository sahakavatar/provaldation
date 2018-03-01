$(document).ready(function () {
    var dd = console.log;
    $("#myTags").tagit({
        fieldName: "skills",
        afterTagRemoved: function (event, ui) {
            authoGenCode();
        },
        afterTagAdded: function (event, ui) {
            authoGenCode()
        }
    });

    function addTaginput() {
        $("body").find('#special_rules').tagit({
            fieldName: "customRules",
            afterTagRemoved: function (event, ui) {
                // authoGenCode();
            },
            afterTagAdded: function (event, ui) {
                // authoGenCode()
            }
        });
    }

    function authoGenCode() {
        var tagits = $('#myTags').find('.tagit-choice');
        var rules = '';
        $.each(tagits, function (k, v) {
            if (k) {
                rules += '|' + $(v).find('[name=skills]').val();
            } else {
                rules += $(v).find('[name=skills]').val();
            }

        });
        $('input[name=rules]').val(rules)
    }

    var addButton = '<div class="form-group m-b-10 clearfix">' +
        '<label class="col-md-4 control-label text-center" for="singlebutton"></label>' +
        '<div class="col-md-8 text-right">' +
        '<button class="btn submit-btn btn-submit-pro m-r-15 pro_add_rule_button">' +
        '<i class="fa fa-gavel" aria-hidden="true"></i>Add rule' +
        '</button> ' +
        '</div>' +
        '</div>'

    function sendajaxvar(url, data, success) {
        $.ajax({
            type: "post",
            datatype: "json",
            url: url,
            data: data,
            headers: {
                'X-CSRF-TOKEN': $("input[name='_token']").val()
            },
            success: function (data) {
                if (success) {
                    success(data);
                    addTaginput();
                }
                return data;
            }
        });
    };
    var rule = '';
    var customRule = '';
    var group;
    $('#pro_validation_rules_groups').on('change', function () {
        if ($(this).val() != 0) {
            group = $(this).val();
            var data = {"rule": group};
            sendajaxvar('/admin/auto-validator/copy/get-rules-groups', data, function (request) {

                $('.pro_validation_rules_group_place').html(request.html);

            })

        } else {
            $('#pro_validator_settings_area').html('Area for rule attributes');
        }
    });

    $('body').on('change', '#pro_validation_rules', function () {
        if ($(this).val() != 0) {
            rule = $(this).val();
            var data = {"rule": $(this).val(), 'group': group};
            sendajaxvar('/admin/auto-validator/copy/get-rules-settings', data, function (request) {

                $('#pro_validator_settings_area').html(request.html + addButton);

            })

        } else {
            $('#pro_validator_settings_area').html('Area for rule attributes');
        }
    });
    $('body').on('change', '#customs', function () {
        if ($(this).val() != 0) {
            customRule = $(this).val();
            var html = '<div class="form-group  m-b-10 clearfix">' +
                '<label class="col-md-3 control-label label-bold" for="title">Select attribute</label>' +
                '<div class="col-md-9">' +
                '<input  type="number" class="form-control pro_custom_attr" data-rule="' + customRule + '">' +
                '</div> ' +
                '</div>'
            $('body').find('.pro_extra_area').html(html);
        }
    });
    $('body').on('click', '.pro_add_rule_button', function () {
        var attributes = $('body').find('[data-rule=' + rule + ']');
        var redyRule = rule;
        if (attributes.length) {
            redyRule = redyRule + ':';
            $.each(attributes, function (k, v) {
                if (attributes.length != (k + 1)) {
                    redyRule = redyRule + $(v).val() + ',';
                } else {
                    redyRule = redyRule + $(v).val();
                }
            });
        }
        $("#myTags").tagit("createTag", redyRule);
    });
    $('body').on('click', '.pro_add_extra_rule_button', function () {
        var attributes = $('body').find('[data-rule=' + customRule + ']');
        var redyRule = customRule;
        if (attributes.length) {
            redyRule = redyRule + ',';
            $.each(attributes, function (k, v) {
                if (attributes.length != (k + 1)) {
                    redyRule = redyRule + $(v).val() + ',';
                } else {
                    redyRule = redyRule + $(v).val();
                }
            });
        }
        $("#special_rules").tagit("createTag", redyRule);
    });
});
