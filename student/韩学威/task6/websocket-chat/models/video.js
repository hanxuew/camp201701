var mongoose = require('mongoose');
var VideoSchema = require('../schemas/video');
var Video = mongoose.model('videos',VideoSchema);

module.exports = Video