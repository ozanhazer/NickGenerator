<?php
class NickGenerator
{
    public static $names = [
        'adara', 'adun', 'aemon', 'agon', 'aidos', 'akana', 'alaz', 'albus', 'aldaris', 'alderaan', 'alfa', 'algol', 'alice', 'almond', 'alpha',
        'altair', 'altarf', 'alula', 'alya', 'amun', 'anarion', 'ancha', 'andromeda', 'angmar', 'antares', 'antlia', 'antonidas', 'anubis',
        'anvilmar', 'apollo', 'apus', 'aqua', 'aquamarine', 'aquarius', 'aquila', 'ara', 'aragog', 'aragorn', 'aramis', 'arcturus', 'ares', 'argon',
        'argus', 'ariel', 'aries', 'artanis', 'artemis', 'arwen', 'asshai', 'astapor', 'athena', 'athene', 'athos', 'atik', 'atlantis', 'atlas',
        'aura', 'auriga', 'autumn', 'auva', 'ayata', 'azshara', 'azure', 'baggins', 'baham', 'balrog', 'barbossa', 'bartemius', 'baryon', 'becrux',
        'beige', 'belinda', 'bellatrix', 'beta', 'betelgeuse', 'bianca', 'bisque', 'black', 'blue', 'borealis', 'boromir', 'boson', 'botein', 'braavos',
        'bravo', 'brown', 'brunus', 'buckbeak', 'buddha', 'burkut', 'burlywood', 'cadet', 'caelum', 'caliban', 'calypso', 'cancer', 'canis',
        'capella', 'caph', 'capricorn', 'carbon', 'carina', 'cassiopeia', 'castor', 'centaurus', 'cepheus', 'cetus', 'chamaeleon', 'chaos', 'charlie',
        'charon', 'cheetah', 'chocolate', 'chronus', 'circinus', 'cobalt', 'colossus', 'columba', 'copernicus', 'coral', 'cordelia', 'cornelius',
        'cornflower', 'cornsilk', 'corona', 'corvus', 'cougar', 'coyote', 'crater', 'cressida', 'crimson', 'crius', 'cronus', 'crux', 'cursa', 'cyan',
        'cygnus', 'cypher', 'davinci', 'deepsky', 'deimos', 'delphinus', 'delta', 'demeter', 'desdemona', 'dharma', 'dimgray', 'dione', 'dobby',
        'dodger', 'dorado', 'dozer', 'draco', 'drogo', 'duke', 'dumbledore', 'duo', 'eagle', 'earnur', 'echo', 'edison', 'eldarion', 'electra',
        'elendil', 'elf', 'elrond', 'enceladus', 'endor', 'eos', 'eowyn', 'epimetheus', 'epsilon', 'eridanus', 'eros', 'eta', 'faramir', 'firebrick',
        'flamingo', 'floral', 'forest', 'fornacis', 'fornax', 'foxtrot', 'fucare', 'fuchsia', 'furud', 'gaia', 'gainsboro', 'galadriel', 'galatea',
        'galileo', 'gamma', 'gandalf', 'gemini', 'ghost', 'gimli', 'ginta', 'glorfindel', 'gluon', 'gold', 'goldenrod', 'golf', 'gollum', 'gomeisa',
        'grafias', 'graviton', 'gray', 'green', 'greyjoy', 'grus', 'gryffindor', 'gunata', 'hades', 'hadron', 'hansolo', 'hawk', 'hedwig', 'helene',
        'helios', 'helium', 'hemera', 'hera', 'hercules', 'hermes', 'hermione', 'hoedus', 'horus', 'hotel', 'hotpink', 'hubble', 'hufflepuff',
        'hummingbird', 'hurmuz', 'hydra', 'hydrus', 'hyperion', 'hypnos', 'iapetus', 'india', 'indian', 'indigo', 'indus', 'iota', 'isis', 'ivory',
        'jackal', 'jaguar', 'janus', 'juliet', 'jupiter', 'kappa', 'kayra', 'kepler', 'khafre', 'khaki', 'kharma', 'khufu', 'kingfisher', 'koyash',
        'kraz', 'krypton', 'kubai', 'kuma', 'lacerta', 'lambda', 'lannister', 'larissa', 'lavender', 'legolas', 'leo', 'leopard', 'lepton', 'lepus',
        'libra', 'lime', 'linen', 'lion', 'longbottom', 'lupus', 'lynx', 'lyra', 'magenta', 'major', 'mantra', 'maroon', 'mars', 'mcgonagall',
        'meereen', 'melisandre', 'mengsk', 'mercury', 'merga', 'mergen', 'meson', 'metis', 'mike', 'mimas', 'minor', 'mira', 'miranda', 'mistyrose',
        'moccasin', 'mohandar', 'monoceros', 'mormont', 'morpheus', 'mundungus', 'murzim', 'musca', 'muscida', 'myr', 'naboo', 'nash', 'nashira',
        'navajo', 'navy', 'nazgul', 'nemesis', 'neo', 'neon', 'neptune', 'nereid', 'newton', 'nihil', 'nirvana', 'norma', 'nova', 'november', 'oberon',
        'ocho', 'octans', 'octo', 'oldlace', 'olive', 'omega', 'omicron', 'ophelia', 'ophiuchus', 'orange', 'orchid', 'orion', 'oscar', 'osiris',
        'owl', 'pan', 'pandora', 'panther', 'papaya', 'pardus', 'pavo', 'peach', 'peacock', 'pegasus', 'pentos', 'perses', 'perseus', 'peru', 'petunia',
        'phaet', 'phineas', 'phobos', 'phoebe', 'phoenix', 'photon', 'pictor', 'pigeon', 'pink', 'pisces', 'plum', 'pluto', 'polaris', 'pollux',
        'pontus', 'porrima', 'porthos', 'portia', 'poseidon', 'potter', 'powder', 'procyon', 'prometheus', 'propus', 'prospero', 'proteus', 'puck',
        'puff', 'puma', 'puppis', 'purple', 'pycelle', 'pyxis', 'qarth', 'qohor', 'quark', 'quarta', 'quattro', 'quebec', 'ra', 'radagast', 'radium',
        'radon', 'rana', 'ravenclaw', 'raynor', 'red', 'regulus', 'reticulum', 'rhea', 'rhonin', 'romeo', 'rosalind', 'sagitta', 'sagittarius',
        'salmon', 'sargeras', 'saruman', 'saturn', 'sauron', 'sceptrum', 'scorpius', 'sculptor', 'scutum', 'seagreen', 'seashell', 'seaworth', 'secunda',
        'selendis', 'sentinel', 'septem', 'seth', 'sienna', 'sierra', 'sigma', 'silver', 'sirius', 'skyblue', 'skywalker', 'slytherin', 'smeagol', 'smoke',
        'snape', 'snow', 'sparrow', 'sphinx', 'spica', 'spock', 'spring', 'stardust', 'stark', 'steel', 'stephano', 'summer', 'supernova', 'taldarin',
        'tango', 'tarazed', 'targaryen', 'tartarus', 'tarth', 'tatooine', 'taurus', 'taygeta', 'teal', 'telesto', 'tengri', 'tertia', 'tesla', 'tessadar',
        'tethys', 'thalassa', 'thanatos', 'themis', 'theoden', 'theta', 'thistle', 'thuban', 'tiger', 'titan', 'tres', 'triangulum', 'trinity', 'triton',
        'tucana', 'turquoise', 'tyrell', 'ukulan', 'ulgan', 'umay', 'upsilon', 'uranus', 'ursa', 'valyria', 'varys', 'vega', 'vela', 'venus', 'violet',
        'virgo', 'volantis', 'voldemort', 'vulpecula', 'vulture', 'whisky', 'white', 'wildhammer', 'winterfell', 'wolf', 'woodpecker', 'xenon', 'yankee',
        'yaxley', 'yelana', 'yelata', 'yellow', 'ygritte', 'yoda', 'yoga', 'yunkai', 'zagara', 'zaniah', 'zaurak', 'zeratul', 'zeta', 'zeus', 'zinc',
        'zulu',
    ];

    public static function generate()
    {
        $idx = array_rand(self::$names);
        return ucfirst(self::$names[$idx]) . mt_rand(10, 99);
    }
}
