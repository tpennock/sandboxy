/*
    This file is generated and updated by Sencha Cmd. You can edit this file as
    needed for your application, but these edits will have to be merged by
    Sencha Cmd when it performs code generation tasks such as generating new
    models, controllers or views and when running "sencha app upgrade".

    Ideally changes to this file would be limited and most work would be done
    in other places (such as Controllers). If Sencha Cmd cannot merge your
    changes and its generated code, it will produce a "merge conflict" that you
    will need to resolve manually.
*/

Ext.application({
    name: 'MyApp',

    requires: 'Ext.MessageBox',

    launch: function() {
        Ext.define('Animal', {
            config: {
                name: null
            },

            constructor: function(config) {
                this.initConfig(config);
            },

            speak: function() {
                alert('grunt');
            }
        });

        Ext.define('Human', {
            extend: 'Animal',

            applyName: function(newName, oldName) {
                return confirm('Are you sure you want to change name to ' + newName + '?')? newName : oldName;
            },

            updateName: function(newName, oldName) {
                alert('Name changed. New name is: ' + newName);
            },

            speak: function() {
                Ext.Msg.alert(this.getName(), "Speaks...");
            }
        });

        var bob = Ext.create('Human', {
            name: 'Bob'
        });

        bob.setName('Fred'); //opens a confirm box, but we click No

        bob.speak(); //still alerts 'Bob'

        

        Ext.create('Ext.tab.Panel', {
            fullscreen: true,
            tabBarPosition: 'bottom',

            items: [
                {
                    title: 'Home',
                    iconCls: 'home',
                    cls: 'home',
                    html: [
                        '<img src="http://staging.sencha.com/img/sencha.png" />',
                        '<h1>Welcome to Sencha Touch</h1>',
                        '<p>We\'re creating the Getting Started app, which demonstrates how to use tabs, lists, and forms to create a simple app.</p>',
                        '<h2>Sencha Touch</h2>'
                    ].join('')
                },
                {
                    xtype: 'nestedlist',
                    title: 'Blog',
                    iconCls: 'star',
                    displayField: 'title',

                    store: {
                        type: 'tree',

                        fields: [
                            'title', 'link', 'author', 'contentSnippet', 'content',
                            {name: 'leaf', defaultValue: true}
                        ],

                        root: {
                            leaf: false
                        },

                        proxy: {
                            type: 'jsonp',
                            url: 'https://ajax.googleapis.com/ajax/services/feed/load?v=1.0&q=http://feeds.feedburner.com/SenchaBlog',
                            reader: {
                                type: 'json',
                                rootProperty: 'responseData.feed.entries'
                            }
                        }
                    },

                    detailCard: {
                        xtype: 'panel',
                        scrollable: true,
                        styleHtmlContent: true
                    },

                    listeners: {
                        itemtap: function(nestedList, list, index, element, post) {
                            this.getDetailCard().setHtml(post.get('content'));
                        }
                    }
                },
                {
                    xtype: 'formpanel',
                    title: 'Contact',
                    iconCls: 'user',
                    url: 'contact.php',
                    layout: 'vbox',

                    items: [
                        {
                            xtype: 'fieldset',
                            title: 'Contact Us',
                            instructions: '(email address is optional)',
                            height: 285,
                            items: [
                                {
                                    xtype: 'textfield',
                                    label: 'Name'
                                },
                                {
                                    xtype: 'emailfield',
                                    label: 'Email'
                                },
                                {
                                    xtype: 'textareafield',
                                    label: 'Message'
                                }
                            ]
                        },
                        {
                            xtype: 'button',
                            text: 'Send',
                            ui: 'confirm',
                            handler: function() {
                                this.up('formpanel').submit();
                            }
                        }
                    ]
                }
            ]

        });
    }
});



// Ext.application({
//     name: 'MyApp',

//     requires: [
//         'Ext.MessageBox'
//     ],

//     views: [
//         'Main'
//     ],

//     icon: {
//         '57': 'resources/icons/Icon.png',
//         '72': 'resources/icons/Icon~ipad.png',
//         '114': 'resources/icons/Icon@2x.png',
//         '144': 'resources/icons/Icon~ipad@2x.png'
//     },

//     isIconPrecomposed: true,

//     startupImage: {
//         '320x460': 'resources/startup/320x460.jpg',
//         '640x920': 'resources/startup/640x920.png',
//         '768x1004': 'resources/startup/768x1004.png',
//         '748x1024': 'resources/startup/748x1024.png',
//         '1536x2008': 'resources/startup/1536x2008.png',
//         '1496x2048': 'resources/startup/1496x2048.png'
//     },

//     launch: function() {
//         // Destroy the #appLoadingIndicator element
//         Ext.fly('appLoadingIndicator').destroy();

//         // Initialize the main view
//         Ext.Viewport.add(Ext.create('app.view.Main'));
//     },

//     onUpdated: function() {
//         Ext.Msg.confirm(
//             "Application Update",
//             "This application has just successfully been updated to the latest version. Reload now?",
//             function(buttonId) {
//                 if (buttonId === 'yes') {
//                     window.location.reload();
//                 }
//             }
//         );
//     }
// });
