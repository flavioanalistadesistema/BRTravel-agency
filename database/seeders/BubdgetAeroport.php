<?php

namespace Database\Seeders;

use App\Models\Aeroport;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BubdgetAeroport extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "acronyms" => "AAR",
                "aeroport" => "Aarhus, Denmark Tirstrup"
            ],
            [
                "acronyms" => "ABJ",
                "aeroport" => "Abidjan, Cote D`Ivoire Port Bouet"
            ],
            [
                "acronyms" => "ABQ",
                "aeroport" => "Albuquerque, NM, USA Albuquerque Intl"
            ],
            [
                "acronyms" => "ABR",
                "aeroport" => "Aberdeen, SD, USA Aberdeen Regional Airport"
            ],
            [
                "acronyms" => "ABS",
                "aeroport" => "Abu Simbel, Egypt Abu Simbel"
            ],
            [
                "acronyms" => "ABY",
                "aeroport" => "Albany, GA, USA Dougherty County"
            ],
            [
                "acronyms" => "ABZ",
                "aeroport" => "Aberdeen, Scotland, United Kingdom Dyce"
            ],
            [
                "acronyms" => "ACA",
                "aeroport" => "Acapulco, Guerrero, Mexico Alvarez International"
            ],
            [
                "acronyms" => "ACC",
                "aeroport" => "Accra, Ghana Kotoka"
            ],
            [
                "acronyms" => "ACE",
                "aeroport" => "Lanzarote, Canary Islands, Spain Lanzarote"
            ],
            [
                "acronyms" => "ACY",
                "aeroport" => "Atlantic City /Atlantic Cty, NJ, USA Atlantic City Intl"
            ],
            [
                "acronyms" => "ADA",
                "aeroport" => "Adana, Turkey Adana"
            ],
            [
                "acronyms" => "ADB",
                "aeroport" => "Izmir, Turkey Adnam Menderes"
            ],
            [
                "acronyms" => "ADD",
                "aeroport" => "Addis Ababa, Ethiopia Bole"
            ],
            [
                "acronyms" => "ADJ",
                "aeroport" => "Amman, Jordan Civil"
            ],
            [
                "acronyms" => "ADL",
                "aeroport" => "Adelaide, South Australia, Australia Adelaide"
            ],
            [
                "acronyms" => "ADZ",
                "aeroport" => "San Andres Island, Colombia"
            ],
            [
                "acronyms" => "AEP",
                "aeroport" => "Buenos Aires, Argentina Jorge Newberry"
            ],
            [
                "acronyms" => "AEY",
                "aeroport" => "Akureyri, Iceland Akureyri"
            ],
            [
                "acronyms" => "AGA",
                "aeroport" => "Agadir, Morocco Inezgane"
            ],
            [
                "acronyms" => "AGB",
                "aeroport" => "Augsburg, Germany Muehlhausen"
            ],
            [
                "acronyms" => "AGP",
                "aeroport" => "Malaga, Spain Malaga"
            ],
            [
                "acronyms" => "AGR",
                "aeroport" => "Agra, India Kheria"
            ],
            [
                "acronyms" => "AHO",
                "aeroport" => "Alghero, Sardenha, Itália"
            ],
            [
                "acronyms" => "AJU",
                "aeroport" => "Aracaju, Sergipe, Brasil"
            ],
            [
                "acronyms" => "AKL",
                "aeroport" => "Auckland, New Zealand Auckland Intl Airport"
            ],
            [
                "acronyms" => "ALA",
                "aeroport" => "Almaty, Kazakhstan Almaty"
            ],
            [
                "acronyms" => "ALG",
                "aeroport" => "Algiers, Algeria Houari Boumedienne"
            ],
            [
                "acronyms" => "ALY",
                "aeroport" => "Alexandria, Egypt Alexandria"
            ],
            [
                "acronyms" => "AMM",
                "aeroport" => "Amman, Jordan Queen Alia International"
            ],
            [
                "acronyms" => "AMS",
                "aeroport" => "Amsterdam, Netherlands Schiphol"
            ],
            [
                "acronyms" => "ANC",
                "aeroport" => "Anchorage, AK, USA Anchorage International"
            ],
            [
                "acronyms" => "ANF",
                "aeroport" => "Antofagasta, Chile Cerro Moreno"
            ],
            [
                "acronyms" => "ANU",
                "aeroport" => "Saint Johns / Antigua & Barbuda Vc Bird Intl"
            ],
            [
                "acronyms" => "APW",
                "aeroport" => "Apia, Samoa Faleolo"
            ],
            [
                "acronyms" => "AQP",
                "aeroport" => "Arequipa, Peru Rodriguez Ballon"
            ],
            [
                "acronyms" => "ARI",
                "aeroport" => "Arica, Chile Chacalluta"
            ],
            [
                "acronyms" => "ARN",
                "aeroport" => "Stockholm, Sweden Arlanda International"
            ],
            [
                "acronyms" => "ASD",
                "aeroport" => "Andros Town, Bahamas"
            ],
            [
                "acronyms" => "ASE",
                "aeroport" => "Aspen, CO, USA Pitkin County Airport Sardy Field"
            ],
            [
                "acronyms" => "ASU",
                "aeroport" => "Asuncion, Paraguay Silvio Pettirossi"
            ],
            [
                "acronyms" => "ATH",
                "aeroport" => "Athens, Greece Hellinikon"
            ],
            [
                "acronyms" => "ATL",
                "aeroport" => "Atlanta, GA, USA Hartsfield International"
            ],
            [
                "acronyms" => "AUA",
                "aeroport" => "Aruba, Aruba Reina Beatrix"
            ],
            [
                "acronyms" => "AUH",
                "aeroport" => "Abu Dhabi, United Arab Emirates Abu Dhabi Intl"
            ],
            [
                "acronyms" => "AUS",
                "aeroport" => "Austin, TX, USA Robert Mueller Municipal Airport"
            ],
            [
                "acronyms" => "AXA",
                "aeroport" => "Anguilla, Anguilla"
            ],
            [
                "acronyms" => "AYT",
                "aeroport" => "Antalya, Turkey Antalya"
            ],
            [
                "acronyms" => "AZO",
                "aeroport" => "Kalamazoo, MI, USA Kalamazoo/Battle Creek Intl"
            ],
            [
                "acronyms" => "BAH",
                "aeroport" => "Bahrain, Bahrain Bahrain Intl"
            ],
            [
                "acronyms" => "BAK",
                "aeroport" => "Baku, Azerbaijan Baku"
            ],
            [
                "acronyms" => "BAQ",
                "aeroport" => "Barranquilla, Colombia E Cortissoz"
            ],
            [
                "acronyms" => "BAU",
                "aeroport" => "Bauru, São Paulo, Brasil Aeroclube Estadual"
            ],
            [
                "acronyms" => "BBU",
                "aeroport" => "Bucharest, Romania Baneasa"
            ],
            [
                "acronyms" => "BCN",
                "aeroport" => "Barcelona, Spain Barcelona"
            ],
            [
                "acronyms" => "BDL",
                "aeroport" => "Hartford, CT, USA Bradley Intl Airport"
            ],
            [
                "acronyms" => "BEG",
                "aeroport" => "Belgrade, Yugoslavia Belgrade"
            ],
            [
                "acronyms" => "BEL",
                "aeroport" => "Belem, Para, Brasil Val De Cans"
            ],
            [
                "acronyms" => "BEO",
                "aeroport" => "Newcastle, NSW, Australia Belmont"
            ],
            [
                "acronyms" => "BER",
                "aeroport" => "Berlin, Germany Schoenefeld"
            ],
            [
                "acronyms" => "BEY",
                "aeroport" => "Beirut, Lebanon International"
            ],
            [
                "acronyms" => "BFS",
                "aeroport" => "Belfast, Ireland, United Kingdom Belfast Intl"
            ],
            [
                "acronyms" => "BGF",
                "aeroport" => "Bangui, Central African Republic Bangui"
            ],
            [
                "acronyms" => "BGI",
                "aeroport" => "Bridgetown, Barbados Grantley Adams Intl"
            ],
            [
                "acronyms" => "BGO",
                "aeroport" => "Bergen, Norway Flesland"
            ],
            [
                "acronyms" => "BGR",
                "aeroport" => "Bangor, ME, USA Bangor Intl Airport"
            ],
            [
                "acronyms" => "BGY",
                "aeroport" => "Milan, Italy Orio Al Serio"
            ],
            [
                "acronyms" => "BHD",
                "aeroport" => "Belfast, Northern Ireland, UK Belfast Harbor"
            ],
            [
                "acronyms" => "BHI",
                "aeroport" => "Bahia Blanca, Argentina"
            ],
            [
                "acronyms" => "BHX",
                "aeroport" => "Birmingham, England, UK Intl"
            ],
            [
                "acronyms" => "BIA",
                "aeroport" => "Bastia, Corsica, France Poretta"
            ],
            [
                "acronyms" => "BIK",
                "aeroport" => "Biak, Indonesia Mokmer"
            ],
            [
                "acronyms" => "BIM",
                "aeroport" => "Bimini, Bahamas Bimini Island Intl"
            ],
            [
                "acronyms" => "BIO",
                "aeroport" => "Bilbao, Spain Sondica"
            ],
            [
                "acronyms" => "BJL",
                "aeroport" => "Banjul, Gambia Yundum International"
            ],
            [
                "acronyms" => "BJX",
                "aeroport" => "Leon/Guanajuato, Mexico Del Bajio"
            ],
            [
                "acronyms" => "BKI",
                "aeroport" => "Kota Kinabalu, Sabah, Malaysia Kota Kinabalu"
            ],
            [
                "acronyms" => "BKK",
                "aeroport" => "Bangkok, Thailand Bangkok Intl Airport"
            ],
            [
                "acronyms" => "BKO",
                "aeroport" => "Bamako, Mali Senou"
            ],
            [
                "acronyms" => "BLL",
                "aeroport" => "Billund, Denmark Billund"
            ],
            [
                "acronyms" => "BLQ",
                "aeroport" => "Bologna, Italy Guglielmo Marconi"
            ],
            [
                "acronyms" => "BLR",
                "aeroport" => "Bangalore, India Hindustan"
            ],
            [
                "acronyms" => "BLZ",
                "aeroport" => "Blantyre, Malawi Chileka"
            ],
            [
                "acronyms" => "BMA",
                "aeroport" => "Stockholm, Sweden Bromma Arpt"
            ],
            [
                "acronyms" => "BNA",
                "aeroport" => "Nashville, TN, USA Nashville Metropolitan"
            ],
            [
                "acronyms" => "BNE",
                "aeroport" => "Brisbane, Queensland, Australia Intl"
            ],
            [
                "acronyms" => "BOG",
                "aeroport" => "Bogota, Colombia Eldorado"
            ],
            [
                "acronyms" => "BOM",
                "aeroport" => "Bombay, India Bombay"
            ],
            [
                "acronyms" => "BON",
                "aeroport" => "Bonaire, Netherlands Antilles Flamingo Field"
            ],
            [
                "acronyms" => "BOS",
                "aeroport" => "Boston, MA, USA Logan International Airport"
            ],
            [
                "acronyms" => "BPS",
                "aeroport" => "Porto Seguro, Bahia, Brasil "
            ],
            [
                "acronyms" => "BRC",
                "aeroport" => "San Carlos De Bariloche, Argentina Intl"
            ],
            [
                "acronyms" => "BRE",
                "aeroport" => "Bremen, Germany Bremen"
            ],
            [
                "acronyms" => "BRI",
                "aeroport" => "Bari Palese, Puglia, Italia Karol Wojtila"
            ],
            [
                "acronyms" => "BRS",
                "aeroport" => "Bristol, England,"
            ],
            [
                "acronyms" => "BRU",
                "aeroport" => "Brussels, Belgium National"
            ],
            [
                "acronyms" => "BSB",
                "aeroport" => "Brasilia, Distrito Federal, Brasil Intl"
            ],
            [
                "acronyms" => "BUD",
                "aeroport" => "Budapest, Hungary Ferihegy"
            ],
            [
                "acronyms" => "BUQ",
                "aeroport" => "Bulawayo, Zimbabwe Bulawayo"
            ],
            [
                "acronyms" => "BUR",
                "aeroport" => "Burbank, CA, USA Burbank Glendale Pasadena"
            ],
            [
                "acronyms" => "BVA",
                "aeroport" => "Boa Vista, Cape Verde Boa Vista"
            ],
            [
                "acronyms" => "BVB",
                "aeroport" => "Boa Vista, Roraima, Brasil"
            ],
            [
                "acronyms" => "BWI",
                "aeroport" => "Baltimore, MD, USA Baltimore Washington Intl"
            ],
            [
                "acronyms" => "BWN",
                "aeroport" => "Bandar Seri Begawan, Brunei Intl"
            ],
            [
                "acronyms" => "BZE",
                "aeroport" => "Belize City, Belize Belize International"
            ],
            [
                "acronyms" => "CAG",
                "aeroport" => "Cagliari, Sardenha, Itália"
            ],
            [
                "acronyms" => "CAI",
                "aeroport" => "Cairo, Egypt International"
            ],
            [
                "acronyms" => "CAN",
                "aeroport" => "Guangzhou, China Baiyun"
            ],
            [
                "acronyms" => "CAS",
                "aeroport" => "Casablanca, Morocco Anfa"
            ],
            [
                "acronyms" => "CAU",
                "aeroport" => "Caruarú, PE, Brasil Oscar Laranjeiras"
            ],
            [
                "acronyms" => "CAY",
                "aeroport" => "Cayenne, French Guiana Rochambeau"
            ],
            [
                "acronyms" => "CBB",
                "aeroport" => "Cochabamba, Bolivia S. J. De La Banda"
            ],
            [
                "acronyms" => "CBR",
                "aeroport" => "Canberra, Australia"
            ],
            [
                "acronyms" => "CCM",
                "aeroport" => "Criciúma, Santa Catarina, Brasil"
            ],
            [
                "acronyms" => "CCP",
                "aeroport" => "Concepcion, Chile Carriel Sur"
            ],
            [
                "acronyms" => "CCS",
                "aeroport" => "Caracas, Venezuela Simon Bolivar Intl"
            ],
            [
                "acronyms" => "CCU",
                "aeroport" => "Calcutta, India Calcutta"
            ],
            [
                "acronyms" => "CDG",
                "aeroport" => "Paris, France Charles De Gaulle"
            ],
            [
                "acronyms" => "CEB",
                "aeroport" => "Cebu, Philippines International"
            ],
            [
                "acronyms" => "CGB",
                "aeroport" => "Cuiabá, Mato Grosso, Brasil"
            ],
            [
                "acronyms" => "CGH",
                "aeroport" => "São Paulo, Brasil Congonhas"
            ],
            [
                "acronyms" => "CGK",
                "aeroport" => "Jakarta, Indonesia Soekarno Hatta Intl"
            ],
            [
                "acronyms" => "CGN",
                "aeroport" => "Cologne/Bonn, Germany Köln/Bonn"
            ],
            [
                "acronyms" => "CGR",
                "aeroport" => "Campo Grande, MS, Brasil"
            ],
            [
                "acronyms" => "CHC",
                "aeroport" => "Christchurch, New Zealand Intl"
            ],
            [
                "acronyms" => "CHM",
                "aeroport" => "Chimbote, Peru"
            ],
            [
                "acronyms" => "CHS",
                "aeroport" => "Charleston, SC, USA Charleston Il"
            ],
            [
                "acronyms" => "CIA",
                "aeroport" => "Rome, Italy Ciampino"
            ],
            [
                "acronyms" => "CJU",
                "aeroport" => "Cheju, South Korea Cheju"
            ],
            [
                "acronyms" => "CKS",
                "aeroport" => "Carajás, Pará, Brasil"
            ],
            [
                "acronyms" => "CKY",
                "aeroport" => "Conakry, Guinea Conakry"
            ],
            [
                "acronyms" => "CLE",
                "aeroport" => "Cleveland, OH, USA Hopkins Intl"
            ],
            [
                "acronyms" => "CLO",
                "aeroport" => "Cali, Colombia Alfonso Bonilla Aragon"
            ],
            [
                "acronyms" => "CLT",
                "aeroport" => "Charlotte, NC, USA Charlotte/Douglas Intl"
            ],
            [
                "acronyms" => "CMB",
                "aeroport" => "Colombo, Sri Lanka Katunayake Intl"
            ],
            [
                "acronyms" => "CMG",
                "aeroport" => "Corumbá, MS, Brasil"
            ],
            [
                "acronyms" => "CMH",
                "aeroport" => "Columbus, OH, USA Port Columbus Intl"
            ],
            [
                "acronyms" => "CMN",
                "aeroport" => "Casablanca, Morocco Mohamed V"
            ],
            [
                "acronyms" => "CNF",
                "aeroport" => "Belo Horizonte, Brasil Tancredo Neves"
            ],
            [
                "acronyms" => "CNS",
                "aeroport" => "Cairns, Queensland, Australia"
            ],
            [
                "acronyms" => "CNX",
                "aeroport" => "Chiang Mai, Thailand Intl"
            ],
            [
                "acronyms" => "COR",
                "aeroport" => "Cordoba, Argentina Pajas Blancas"
            ],
            [
                "acronyms" => "COS",
                "aeroport" => "Colorado Springs, CO, USA Municipal"
            ],
            [
                "acronyms" => "CPC",
                "aeroport" => "San Martin De Los Andes, Neuquen, Argentina"
            ],
            [
                "acronyms" => "CPH",
                "aeroport" => "Copenhagen, Denmark"
            ],
            [
                "acronyms" => "CPQ",
                "aeroport" => "Campinas, São Paulo, Brasil Viracopos"
            ],
            [
                "acronyms" => "CPT",
                "aeroport" => "Cape Town, South Africa D F Malan"
            ],
            [
                "acronyms" => "CPV",
                "aeroport" => "Campina Grande, Paraíba, Brasil"
            ],
            [
                "acronyms" => "CRD",
                "aeroport" => "Comodoro Rivadavia, Chubut, Argentina"
            ],
            [
                "acronyms" => "CRU",
                "aeroport" => "Carriacou Island, Grenada"
            ],
            [
                "acronyms" => "CTG",
                "aeroport" => "Cartagena, Colombia Rafael Nunez"
            ],
            [
                "acronyms" => "CTS",
                "aeroport" => "Sapporo, Japan Chitose"
            ],
            [
                "acronyms" => "CTU",
                "aeroport" => "Chengdu, China"
            ],
            [
                "acronyms" => "CUC",
                "aeroport" => "Cucuta, Colombia Camilo Daza"
            ],
            [
                "acronyms" => "CUE",
                "aeroport" => "Cuenca, Ecuador Mariscal La Mar"
            ],
            [
                "acronyms" => "CUN",
                "aeroport" => "Cancun, Mexico"
            ],
            [
                "acronyms" => "CUR",
                "aeroport" => "Willemstad / Curacao Hato"
            ],
            [
                "acronyms" => "CUU",
                "aeroport" => "Chihuahua, Mexico Gen. Villalobos"
            ],
            [
                "acronyms" => "CUZ",
                "aeroport" => "Cuzco, Peru Tte Velazco Astete"
            ],
            [
                "acronyms" => "CVG",
                "aeroport" => "Cincinnati, OH, USA Greater Cincinnati Intl"
            ],
            [
                "acronyms" => "CWB",
                "aeroport" => "Curitiba, Paraná, Brasil Afonso Pena"
            ],
            [
                "acronyms" => "CWL",
                "aeroport" => "Cardiff, Wales, United Kingdom"
            ],
            [
                "acronyms" => "CYB",
                "aeroport" => "Cayman Brac Island, Cayman Islands"
            ],
            [
                "acronyms" => "CYR",
                "aeroport" => "Colonia, Uruguay"
            ],
            [
                "acronyms" => "CZM",
                "aeroport" => "Cozumel, Quintana Roo, México"
            ],
            [
                "acronyms" => "CZS",
                "aeroport" => "Cruzeiro do Sul, Acre, Brasil"
            ],
            [
                "acronyms" => "DAB",
                "aeroport" => "Daytona Beach, FL, USA"
            ],
            [
                "acronyms" => "DAC",
                "aeroport" => "Dhaka, Bangladesh Zia Inl"
            ],
            [
                "acronyms" => "DAD",
                "aeroport" => "Da Nang, Vietnam Da Nang"
            ],
            [
                "acronyms" => "DAL",
                "aeroport" => "Dallas, TX, USA Love Field"
            ],
            [
                "acronyms" => "DAM",
                "aeroport" => "Damascus, Syria Damascus Intl"
            ],
            [
                "acronyms" => "DAR",
                "aeroport" => "Dar Es Salaam, Tanzania Intl"
            ],
            [
                "acronyms" => "DAY",
                "aeroport" => "Dayton, OH, USA James M Cox Intel"
            ],
            [
                "acronyms" => "DBV",
                "aeroport" => "Dubrovnik, Croatia Hrvatska"
            ],
            [
                "acronyms" => "DCA",
                "aeroport" => "Washington, DC, USA Reagan / National"
            ],
            [
                "acronyms" => "DEL",
                "aeroport" => "Delhi, India Delhi Intl"
            ],
            [
                "acronyms" => "DEN",
                "aeroport" => "Denver, CO, USA Denver Intl"
            ],
            [
                "acronyms" => "DFW",
                "aeroport" => "Dallas/Ft Worth, TX, USA DFW Intl"
            ],
            [
                "acronyms" => "DHA",
                "aeroport" => "Dhahran, Saudi Arabia Intl"
            ],
            [
                "acronyms" => "DIJ",
                "aeroport" => "Dijon, France Longvic"
            ],
            [
                "acronyms" => "DIL",
                "aeroport" => "Dili, Indonesia Comoro"
            ],
            [
                "acronyms" => "DKR",
                "aeroport" => "Dakar, Senegal Yoff"
            ],
            [
                "acronyms" => "DLA",
                "aeroport" => "Douala, Cameroon "
            ],
            [
                "acronyms" => "DLC",
                "aeroport" => "Dalian, China"
            ],
            [
                "acronyms" => "DME",
                "aeroport" => "Moscou, Russia Domodedovo"
            ],
            [
                "acronyms" => "DOH",
                "aeroport" => "Doha, Qatar Doha"
            ],
            [
                "acronyms" => "DOM",
                "aeroport" => "Dominica, Dominica Melville Hal Dom"
            ],
            [
                "acronyms" => "DPS",
                "aeroport" => "Denpasar Bali, Indonesia Ngurah Rai"
            ],
            [
                "acronyms" => "DRS",
                "aeroport" => "Dresden, Germany Dresden"
            ],
            [
                "acronyms" => "DSM",
                "aeroport" => "Des Moines, IA, USA"
            ],
            [
                "acronyms" => "DTM",
                "aeroport" => "Dortmund, Germany Wickede"
            ],
            [
                "acronyms" => "DTW",
                "aeroport" => "Detroit, MI, USA Metropolitan"
            ],
            [
                "acronyms" => "DUB",
                "aeroport" => "Dublin, Ireland Dublin"
            ],
            [
                "acronyms" => "DUR",
                "aeroport" => "Durban, South Africa Louis Botha"
            ],
            [
                "acronyms" => "DUS",
                "aeroport" => "Dusseldorf, Germany Dusseldorf"
            ],
            [
                "acronyms" => "DUT",
                "aeroport" => "Dutch Harbor, AK, USA"
            ],
            [
                "acronyms" => "DVO",
                "aeroport" => "Davao, Philippines Mati"
            ],
            [
                "acronyms" => "DXB",
                "aeroport" => "Dubai, United Arab Emirates Intl"
            ],
            [
                "acronyms" => "EBB",
                "aeroport" => "Entebbe/Kampala, Uganda"
            ],
            [
                "acronyms" => "EDI",
                "aeroport" => "Edinburgh, Scotland, UK Turnhouse"
            ],
            [
                "acronyms" => "EIN",
                "aeroport" => "Eindhoven, Netherlands Welschap"
            ],
            [
                "acronyms" => "EIS",
                "aeroport" => "Tortola/Beef Island, UK Virgin Islands"
            ],
            [
                "acronyms" => "ELH",
                "aeroport" => "North Eleuthera, Bahamas"
            ],
            [
                "acronyms" => "ELP",
                "aeroport" => "El Paso, TX, USA El Paso Intl"
            ],
            [
                "acronyms" => "EMA",
                "aeroport" => "East Midlands, UK"
            ],
            [
                "acronyms" => "EOH",
                "aeroport" => "Medellin, Colombia Enrique Olaya Herrara"
            ],
            [
                "acronyms" => "ERS",
                "aeroport" => "Windhoek, Namibia Eros"
            ],
            [
                "acronyms" => "ESB",
                "aeroport" => "Ankara, Turkey Esenboga"
            ],
            [
                "acronyms" => "ETH",
                "aeroport" => "Elat, Israel"
            ],
            [
                "acronyms" => "ETZ",
                "aeroport" => "Metz/Nancy, France Frescaty"
            ],
            [
                "acronyms" => "EVN",
                "aeroport" => "Yerevan, Armenia"
            ],
            [
                "acronyms" => "EWR",
                "aeroport" => "Newark, NJ, USA International"
            ],
            [
                "acronyms" => "EXT",
                "aeroport" => "Exeter, England, UK"
            ],
            [
                "acronyms" => "EYW",
                "aeroport" => "Key West, FL, USA"
            ],
            [
                "acronyms" => "EZE",
                "aeroport" => "Buenos Aires, Argentina Min. Pistarini"
            ],
            [
                "acronyms" => "FAE",
                "aeroport" => "Faroe Islands,"
            ],
            [
                "acronyms" => "FAI",
                "aeroport" => "Fairbanks, AK, USA International"
            ],
            [
                "acronyms" => "FAO",
                "aeroport" => "Faro, Portugal"
            ],
            [
                "acronyms" => "FAR",
                "aeroport" => "Fargo, ND, USA Hector"
            ],
            [
                "acronyms" => "FAT",
                "aeroport" => "Fresno, CA, USA"
            ],
            [
                "acronyms" => "FBU",
                "aeroport" => "Oslo, Norway Fornebu"
            ],
            [
                "acronyms" => "FCO",
                "aeroport" => "Rome, Italy Leonardo Da Vinci/Fiumicino"
            ],
            [
                "acronyms" => "FDF",
                "aeroport" => "Fort De France, Martinique"
            ],
            [
                "acronyms" => "FDO",
                "aeroport" => "San Fernando, Argentina"
            ],
            [
                "acronyms" => "FEZ",
                "aeroport" => "Fez, Morocco"
            ],
            [
                "acronyms" => "FIH",
                "aeroport" => "Kinshasa, Zaire Kinshasa"
            ],
            [
                "acronyms" => "FLL",
                "aeroport" => "Ft Lauderdale, FL, USA F. Laud. Hollywood Intl"
            ],
            [
                "acronyms" => "FLN",
                "aeroport" => "Florianópolis, SC, Brasil"
            ],
            [
                "acronyms" => "FLR",
                "aeroport" => "Florença, Italia"
            ],
            [
                "acronyms" => "FMO",
                "aeroport" => "Münster, Germany"
            ],
            [
                "acronyms" => "FNC",
                "aeroport" => "Funchal, Madeira, Portugal"
            ],
            [
                "acronyms" => "FOR",
                "aeroport" => "Fortaleza, CE, Brasil"
            ],
            [
                "acronyms" => "FPO",
                "aeroport" => "Freeport, Bahamas Intl"
            ],
            [
                "acronyms" => "FRA",
                "aeroport" => "Frankfurt, Germany International"
            ],
            [
                "acronyms" => "FUK",
                "aeroport" => "Fukuoka, Japan Itazuke"
            ],
            [
                "acronyms" => "GAJ",
                "aeroport" => "Yamagata, Japan Junmachi"
            ],
            [
                "acronyms" => "GBE",
                "aeroport" => "Gaborone, Botswana"
            ],
            [
                "acronyms" => "GCI",
                "aeroport" => "Guernsey, Channel Islands, UK"
            ],
            [
                "acronyms" => "GCM",
                "aeroport" => "Grand Cayman Owen Roberts"
            ],
            [
                "acronyms" => "GCN",
                "aeroport" => "Grand Canyon, AZ, USA"
            ],
            [
                "acronyms" => "GDL",
                "aeroport" => "Guadalajara, Mexico Miguel Hidalgo Intl"
            ],
            [
                "acronyms" => "GDN",
                "aeroport" => "Gdansk, Poland Rebiechowo"
            ],
            [
                "acronyms" => "GDT",
                "aeroport" => "Grand Turk Is, Turks & Caicos"
            ],
            [
                "acronyms" => "GDX",
                "aeroport" => "Magadan, Russia"
            ],
            [
                "acronyms" => "GEN",
                "aeroport" => "Oslo, Norway Gardermoen"
            ],
            [
                "acronyms" => "GEO",
                "aeroport" => "Georgetown, Guyana Timehri"
            ],
            [
                "acronyms" => "GGT",
                "aeroport" => "George Town, Bahamas Exuma"
            ],
            [
                "acronyms" => "GHB",
                "aeroport" => "Governors Harbour, Bahamas"
            ],
            [
                "acronyms" => "GIB",
                "aeroport" => "Gibraltar"
            ],
            [
                "acronyms" => "GIG",
                "aeroport" => "RJ, Brasil Tom Jobim Intl"
            ],
            [
                "acronyms" => "GLA",
                "aeroport" => "Glasgow, Scotland, UK"
            ],
            [
                "acronyms" => "GNB",
                "aeroport" => "Grenoble, France St Geoirs"
            ],
            [
                "acronyms" => "GND",
                "aeroport" => "St Georges/Grenada Pt Saline"
            ],
            [
                "acronyms" => "GOA",
                "aeroport" => "Genoa, Italy Christoforo Colombo"
            ],
            [
                "acronyms" => "GOT",
                "aeroport" => "Gothenburg, Sweden Landvetter"
            ],
            [
                "acronyms" => "GPS",
                "aeroport" => "Galapagos Islands, Ecuador Baltra"
            ],
            [
                "acronyms" => "GRO",
                "aeroport" => "Gerona, Spain Costa Brava"
            ],
            [
                "acronyms" => "GRQ",
                "aeroport" => "Groningen, Netherlands Eelde"
            ],
            [
                "acronyms" => "GRU",
                "aeroport" => "São Paulo, Brasil Guarulhos / F. Montoro"
            ],
            [
                "acronyms" => "GRX",
                "aeroport" => "Granada, Spain"
            ],
            [
                "acronyms" => "GRZ",
                "aeroport" => "Graz, Austria Thalerhof"
            ],
            [
                "acronyms" => "GUA",
                "aeroport" => "Guatemala City, Guatemala La Aurora"
            ],
            [
                "acronyms" => "GUM",
                "aeroport" => "Guam Ab Wonpat Intl"
            ],
            [
                "acronyms" => "GUZ",
                "aeroport" => "Guarapari, Espírito Santo, Brasil"
            ],
            [
                "acronyms" => "GVA",
                "aeroport" => "Geneva, Switzerland"
            ],
            [
                "acronyms" => "GXQ",
                "aeroport" => "Coyhaique, Chile Teniente Vidal"
            ],
            [
                "acronyms" => "GYE",
                "aeroport" => "Guayaquil, Ecuador Simon Bolívar"
            ],
            [
                "acronyms" => "GYN",
                "aeroport" => "Goiânia , GO, Brasil Santa Genoveva"
            ],
            [
                "acronyms" => "HAG",
                "aeroport" => "The Hague, Netherlands"
            ],
            [
                "acronyms" => "HAH",
                "aeroport" => "Moroni (Hahaya), Comoros"
            ],
            [
                "acronyms" => "HAJ",
                "aeroport" => "Hanover, Germany Langenhagen"
            ],
            [
                "acronyms" => "HAK",
                "aeroport" => "Haikou, China Haikou"
            ],
            [
                "acronyms" => "HAM",
                "aeroport" => "Hamburg, Germany Fuhlsbuttel"
            ],
            [
                "acronyms" => "HAN",
                "aeroport" => "Hanoi, Vietnam Noibai Airport"
            ],
            [
                "acronyms" => "HAV",
                "aeroport" => "Havana, Cuba Jose Marti"
            ],
            [
                "acronyms" => "HBA",
                "aeroport" => "Hobart, Tasmania, Australia"
            ],
            [
                "acronyms" => "HDB",
                "aeroport" => "Heidelberg, Germany"
            ],
            [
                "acronyms" => "HEL",
                "aeroport" => "Helsinki, Finland Helsinki"
            ],
            [
                "acronyms" => "HER",
                "aeroport" => "Heraklion, Crete Island, Greece"
            ],
            [
                "acronyms" => "HIJ",
                "aeroport" => "Hiroshima, Japan"
            ],
            [
                "acronyms" => "HIR",
                "aeroport" => "Honiara/Guadalcanal, Solomon"
            ],
            [
                "acronyms" => "HIS",
                "aeroport" => "Hayman Island, Australia"
            ],
            [
                "acronyms" => "HKD",
                "aeroport" => "Hakodate, Japan"
            ],
            [
                "acronyms" => "HKG",
                "aeroport" => "Hong Kong, Hong Kong"
            ],
            [
                "acronyms" => "HKT",
                "aeroport" => "Phuket, Thailand Phuket"
            ],
            [
                "acronyms" => "HMA",
                "aeroport" => "Malmo, Sweden"
            ],
            [
                "acronyms" => "HNL",
                "aeroport" => "Honolulu, HI, USA International"
            ],
            [
                "acronyms" => "HOU",
                "aeroport" => "Houston, TX, USA Hobby"
            ],
            [
                "acronyms" => "HPV",
                "aeroport" => "Kauai Island, HI, USA Princeville"
            ],
            [
                "acronyms" => "HRB",
                "aeroport" => "Harbin, China"
            ],
            [
                "acronyms" => "HRE",
                "aeroport" => "Harare, Zimbabwe"
            ],
            [
                "acronyms" => "HRG",
                "aeroport" => "Hurghada, Egypt"
            ],
            [
                "acronyms" => "HRK",
                "aeroport" => "Kharkov, Ukraine"
            ],
            [
                "acronyms" => "HUN",
                "aeroport" => "Hualien, Taiwan"
            ],
            [
                "acronyms" => "HUX",
                "aeroport" => "Huatulco, Oaxaca, Mexico"
            ],
            [
                "acronyms" => "HYD",
                "aeroport" => "Hyderabad, India Begumpet"
            ],
            [
                "acronyms" => "IAD",
                "aeroport" => "Washington, DC, USA Dulles"
            ],
            [
                "acronyms" => "IAH",
                "aeroport" => "Houston, TX, USA Intercontinental"
            ],
            [
                "acronyms" => "IBZ",
                "aeroport" => "Ibiza, Spain Ibiza"
            ],
            [
                "acronyms" => "IEV",
                "aeroport" => "Kiev, Ukraine Zhulhany"
            ],
            [
                "acronyms" => "IGM",
                "aeroport" => "Kingman, AZ, USA Mohave County"
            ],
            [
                "acronyms" => "IGR",
                "aeroport" => "Iguazu, Argentina International"
            ],
            [
                "acronyms" => "IGU",
                "aeroport" => "Foz do Iguaçu, PR, Brasil Cataratas"
            ],
            [
                "acronyms" => "IKT",
                "aeroport" => "Irkutsk, Russia"
            ],
            [
                "acronyms" => "IMP",
                "aeroport" => "Imperatriz, MA, Brasil"
            ],
            [
                "acronyms" => "INN",
                "aeroport" => "Innsbruck, Austria Kranebitten"
            ],
            [
                "acronyms" => "INU",
                "aeroport" => "Nauru, Nauru"
            ],
            [
                "acronyms" => "INV",
                "aeroport" => "Inverness, Scotland, UK"
            ],
            [
                "acronyms" => "IOM",
                "aeroport" => "Isle Of Man, UK Ronaldsway"
            ],
            [
                "acronyms" => "IOS",
                "aeroport" => "Ilhéus, BA, Brasil"
            ],
            [
                "acronyms" => "IPC",
                "aeroport" => "Ilha da Páscoa, Chile Mataveri"
            ],
            [
                "acronyms" => "IPH",
                "aeroport" => "Ipoh, Malaysia Ipoh"
            ],
            [
                "acronyms" => "IPI",
                "aeroport" => "Ipiales, Colombia San Luis"
            ],
            [
                "acronyms" => "IQQ",
                "aeroport" => "Iquique, Chile Chucumata"
            ],
            [
                "acronyms" => "IQT",
                "aeroport" => "Iquitos, Peru Cf Secada"
            ],
            [
                "acronyms" => "ISB",
                "aeroport" => "Islamabad, Pakistan International"
            ],
            [
                "acronyms" => "ISC",
                "aeroport" => "Isles Of Scilly, UK Tresco"
            ],
            [
                "acronyms" => "IST",
                "aeroport" => "Istanbul, Turkey Ataturk"
            ],
            [
                "acronyms" => "ITM",
                "aeroport" => "Osaka, Japan Itami International"
            ],
            [
                "acronyms" => "ITO",
                "aeroport" => "Hilo, HI, USA Hilo Hawaii"
            ],
            [
                "acronyms" => "IZO",
                "aeroport" => "Izumo, Japan"
            ],
            [
                "acronyms" => "JAI",
                "aeroport" => "Jaipur, India Sanganeer"
            ],
            [
                "acronyms" => "JAX",
                "aeroport" => "Jacksonville, FL, USA International"
            ],
            [
                "acronyms" => "JDF",
                "aeroport" => "Juíz de Fora, MG, Brasil"
            ],
            [
                "acronyms" => "JDH",
                "aeroport" => "Jodhpur, India"
            ],
            [
                "acronyms" => "JDO",
                "aeroport" => "Juazeiro do Norte, CE, Brasil Orlando Bezerra de Menezes"
            ],
            [
                "acronyms" => "JED",
                "aeroport" => "Jeddah, Saudi Arabia International"
            ],
            [
                "acronyms" => "JER",
                "aeroport" => "Jersey, Channel Islands, UK States"
            ],
            [
                "acronyms" => "JFK",
                "aeroport" => "New York, USA John F Kennedy Intl"
            ],
            [
                "acronyms" => "JIB",
                "aeroport" => "Djibouti, Djibouti Ambouli"
            ],
            [
                "acronyms" => "JKG",
                "aeroport" => "Jonkoping, Sweden Axamo"
            ],
            [
                "acronyms" => "JMK",
                "aeroport" => "Mikonos, Greece Mikonos"
            ],
            [
                "acronyms" => "JNB",
                "aeroport" => "Johannesburg, South Africa Jan Smuts"
            ],
            [
                "acronyms" => "JNX",
                "aeroport" => "Naxos, Greece"
            ],
            [
                "acronyms" => "JOG",
                "aeroport" => "Yogyakarta, Indonesia"
            ],
            [
                "acronyms" => "JOI",
                "aeroport" => "Joinville, SC, Brasil "
            ],
            [
                "acronyms" => "JON",
                "aeroport" => "Johnston Island, US, Outlying Islands"
            ],
            [
                "acronyms" => "JRO",
                "aeroport" => "Kilimanjaro, Tanzania"
            ],
            [
                "acronyms" => "JTC",
                "aeroport" => "Bauru Arealva, SP, Brasil"
            ],
            [
                "acronyms" => "JTR",
                "aeroport" => "Santorini, Greece"
            ],
            [
                "acronyms" => "JUJ",
                "aeroport" => "Jujuy, Argentina El Cadillal"
            ],
            [
                "acronyms" => "JUL",
                "aeroport" => "Juliaca, Peru Juliaca"
            ],
            [
                "acronyms" => "KAN",
                "aeroport" => "Kano, Nigeria Aminu Kano"
            ],
            [
                "acronyms" => "KBP",
                "aeroport" => "Kiev, Ukraine Borispol"
            ],
            [
                "acronyms" => "KEF",
                "aeroport" => "Reykjavik, Iceland Intl"
            ],
            [
                "acronyms" => "KEL",
                "aeroport" => "Kiel, Germany Holtenau"
            ],
            [
                "acronyms" => "KGD",
                "aeroport" => "Kaliningrad, Russia"
            ],
            [
                "acronyms" => "KHI",
                "aeroport" => "Karachi, Pakistan"
            ],
            [
                "acronyms" => "KIN",
                "aeroport" => "Kingston, Jamaica"
            ],
            [
                "acronyms" => "KIX",
                "aeroport" => "Osaka, Japan Kansai Intl"
            ],
            [
                "acronyms" => "KJA",
                "aeroport" => "Krasnojarsk, Russia"
            ],
            [
                "acronyms" => "KLU",
                "aeroport" => "Klagenfurt, Austria Klagenfurt"
            ],
            [
                "acronyms" => "KMG",
                "aeroport" => "Kunming, China"
            ],
            [
                "acronyms" => "KMI",
                "aeroport" => "Miyazaki, Japan"
            ],
            [
                "acronyms" => "KMJ",
                "aeroport" => "Kumamoto, Japan"
            ],
            [
                "acronyms" => "KOA",
                "aeroport" => "Kona, HI, USA Keahole"
            ],
            [
                "acronyms" => "KOJ",
                "aeroport" => "Kagoshima, Japan"
            ],
            [
                "acronyms" => "KRK",
                "aeroport" => "Krakow, Poland Balice"
            ],
            [
                "acronyms" => "KRN",
                "aeroport" => "Kiruna, Sweden Kiruna"
            ],
            [
                "acronyms" => "KRP",
                "aeroport" => "Karup, Denmark Karup"
            ],
            [
                "acronyms" => "KRT",
                "aeroport" => "Khartoum, Sudan Civil"
            ],
            [
                "acronyms" => "KSA",
                "aeroport" => "Kosrae, Caroline Islands, Micronesia"
            ],
            [
                "acronyms" => "KTM",
                "aeroport" => "Kathmandu, Nepal Tribhuvan"
            ],
            [
                "acronyms" => "KTW",
                "aeroport" => "Katowice, Poland Pyrzowice"
            ],
            [
                "acronyms" => "KUL",
                "aeroport" => "Kuala Lumpur, Malaysia Subang"
            ],
            [
                "acronyms" => "KUN",
                "aeroport" => "Kaunas, Lithuania Kaunas"
            ],
            [
                "acronyms" => "KUO",
                "aeroport" => "Kuopio, Finland Kuopio"
            ],
            [
                "acronyms" => "KUV",
                "aeroport" => "Kunsan, South Korea"
            ],
            [
                "acronyms" => "KVA",
                "aeroport" => "Kavala, Greece Kavala"
            ],
            [
                "acronyms" => "KWA",
                "aeroport" => "Kwajalein, Marshall Islands"
            ],
            [
                "acronyms" => "KWI",
                "aeroport" => "Kuwait, International"
            ],
            [
                "acronyms" => "KWL",
                "aeroport" => "Guilin, China"
            ],
            [
                "acronyms" => "KZN",
                "aeroport" => "Kazan, Rússia"
            ],
            [
                "acronyms" => "LAD",
                "aeroport" => "Luanda, Angola"
            ],
            [
                "acronyms" => "LAS",
                "aeroport" => "Las Vegas, NV, USA McCarran"
            ],
            [
                "acronyms" => "LAX",
                "aeroport" => "Los Angeles, CA, USA International"
            ],
            [
                "acronyms" => "LBA",
                "aeroport" => "Leeds/Bradford, England, UK"
            ],
            [
                "acronyms" => "LBV",
                "aeroport" => "Libreville, Gabon"
            ],
            [
                "acronyms" => "LCA",
                "aeroport" => "Larnaca, Cyprus Intl"
            ],
            [
                "acronyms" => "LCE",
                "aeroport" => "La Ceiba, Honduras International"
            ],
            [
                "acronyms" => "LCG",
                "aeroport" => "La Coruna, Spain"
            ],
            [
                "acronyms" => "LCY",
                "aeroport" => "London, England, UK London City"
            ],
            [
                "acronyms" => "LDB",
                "aeroport" => "Londrina, PR, Brasil "
            ],
            [
                "acronyms" => "LDE",
                "aeroport" => "Lourdes/Tarbes, France"
            ],
            [
                "acronyms" => "LEJ",
                "aeroport" => "Leipzig, Germany"
            ],
            [
                "acronyms" => "LET",
                "aeroport" => "Leticia, Colombia Gen Av Cobu"
            ],
            [
                "acronyms" => "LFW",
                "aeroport" => "Lome, Togo"
            ],
            [
                "acronyms" => "LGA",
                "aeroport" => "New York, NY, USA La Guardia"
            ],
            [
                "acronyms" => "LGB",
                "aeroport" => "Long Beach, CA, USA Municipal"
            ],
            [
                "acronyms" => "LGK",
                "aeroport" => "Langkawi, Malaysia"
            ],
            [
                "acronyms" => "LGW",
                "aeroport" => "London, England, UK Gatwick"
            ],
            [
                "acronyms" => "LHE",
                "aeroport" => "Lahore, Pakistan Lahore"
            ],
            [
                "acronyms" => "LHR",
                "aeroport" => "London, England, UK Heathrow"
            ],
            [
                "acronyms" => "LIM",
                "aeroport" => "Lima, Peru Jorge Chavez"
            ],
            [
                "acronyms" => "LIN",
                "aeroport" => "Milan, Italy Linate"
            ],
            [
                "acronyms" => "LIS",
                "aeroport" => "Lisboa, Portugal Portela de Sacavém"
            ],
            [
                "acronyms" => "LJU",
                "aeroport" => "Ljubljana, Slovenia Brnik"
            ],
            [
                "acronyms" => "LLW",
                "aeroport" => "Lilongwe, Malawi Kamuzu Intl"
            ],
            [
                "acronyms" => "LNZ",
                "aeroport" => "Linz, Austria"
            ],
            [
                "acronyms" => "LOS",
                "aeroport" => "Lagos, Nigeria Murtala Muhammed"
            ],
            [
                "acronyms" => "LPB",
                "aeroport" => "La Paz, Bolivia El Alto"
            ],
            [
                "acronyms" => "LPI",
                "aeroport" => "Linkoping, Sweden Saab"
            ],
            [
                "acronyms" => "LPL",
                "aeroport" => "Liverpool, England, UK"
            ],
            [
                "acronyms" => "LRM",
                "aeroport" => "Casa De Campo, Dominican Republic"
            ],
            [
                "acronyms" => "LSS",
                "aeroport" => "Terre De Haut, Guadeloupe"
            ],
            [
                "acronyms" => "LTN",
                "aeroport" => "London, England, UK Luton"
            ],
            [
                "acronyms" => "LUG",
                "aeroport" => "Lugano, Switzerland Agno"
            ],
            [
                "acronyms" => "LUN",
                "aeroport" => "Lusaka, Zambia"
            ],
            [
                "acronyms" => "LUX",
                "aeroport" => "Luxembourg Findel"
            ],
            [
                "acronyms" => "LVI",
                "aeroport" => "Livingstone, Zambia"
            ],
            [
                "acronyms" => "LWO",
                "aeroport" => "Lvov, Ukraine Snilow"
            ],
            [
                "acronyms" => "LWY",
                "aeroport" => "Lawas, Sarawak, Malaysia"
            ],
            [
                "acronyms" => "LXR",
                "aeroport" => "Luxor, Egypt"
            ],
            [
                "acronyms" => "LYS",
                "aeroport" => "Lyon, France Satolas"
            ],
            [
                "acronyms" => "MAA",
                "aeroport" => "Madras, India Meenambarkkam"
            ],
            [
                "acronyms" => "MAD",
                "aeroport" => "Madrid, Spain Barajas"
            ],
            [
                "acronyms" => "MAH",
                "aeroport" => "Menorca, Spain"
            ],
            [
                "acronyms" => "MAJ",
                "aeroport" => "Majuro, Marshall Islands International"
            ],
            [
                "acronyms" => "MAN",
                "aeroport" => "Manchester, England, UK"
            ],
            [
                "acronyms" => "MAO",
                "aeroport" => "Manaus, AM, Brasil Eduardo Gomes"
            ],
            [
                "acronyms" => "MAR",
                "aeroport" => "Maracaibo, Venezuela La Chinita"
            ],
            [
                "acronyms" => "MBA",
                "aeroport" => "Mombasa, Kenya Moi International"
            ],
            [
                "acronyms" => "MBJ",
                "aeroport" => "Montego Bay, Jamaica Sangster"
            ],
            [
                "acronyms" => "MCI",
                "aeroport" => "Kansas City, MO, USA International"
            ],
            [
                "acronyms" => "MCM",
                "aeroport" => "Monte Carlo, Monaco Heliporto"
            ],
            [
                "acronyms" => "MCO",
                "aeroport" => "Orlando, FL, USA International"
            ],
            [
                "acronyms" => "MCP",
                "aeroport" => "Macapa, AP, Brasil"
            ],
            [
                "acronyms" => "MCT",
                "aeroport" => "Muscat, Oman Seeb"
            ],
            [
                "acronyms" => "MCZ",
                "aeroport" => "Maceió AL, Brasil Zumbi dos Palmares"
            ],
            [
                "acronyms" => "MDC",
                "aeroport" => "Manado, Indonesia Samratulang"
            ],
            [
                "acronyms" => "MDE",
                "aeroport" => "Medellin, Colombia La Playas"
            ],
            [
                "acronyms" => "MDQ",
                "aeroport" => "Mar Del Plata, Argentina"
            ],
            [
                "acronyms" => "MDW",
                "aeroport" => "Chicago, IL, USA"
            ],
            [
                "acronyms" => "MDZ",
                "aeroport" => "Mendoza, Argentina El Plumerillo"
            ],
            [
                "acronyms" => "MED",
                "aeroport" => "Medinah, Saudi Arabia Prince Mohammad Bin Abdulaziz"
            ],
            [
                "acronyms" => "MEL",
                "aeroport" => "Melbourne, Australia Tullamarine"
            ],
            [
                "acronyms" => "MEM",
                "aeroport" => "Memphis, TN, USA International"
            ],
            [
                "acronyms" => "MES",
                "aeroport" => "Medan, Indonesia"
            ],
            [
                "acronyms" => "MEX",
                "aeroport" => "Mexico City Mexico Benito Juarez"
            ],
            [
                "acronyms" => "MGA",
                "aeroport" => "Managua, Nicaragua"
            ],
            [
                "acronyms" => "MGQ",
                "aeroport" => "Mogadishu, Somalia"
            ],
            [
                "acronyms" => "MIA",
                "aeroport" => "Miami, FL, USA International"
            ],
            [
                "acronyms" => "MLA",
                "aeroport" => "Malta Luqa"
            ],
            [
                "acronyms" => "MLE",
                "aeroport" => "Male, Maldives Male International"
            ],
            [
                "acronyms" => "MLH",
                "aeroport" => "Mulhouse, France"
            ],
            [
                "acronyms" => "MMX",
                "aeroport" => "Malmo, Sweden Sturup"
            ],
            [
                "acronyms" => "MNI",
                "aeroport" => "Montserrat Blackburne"
            ],
            [
                "acronyms" => "MNL",
                "aeroport" => "Manila, Philippines Ninoy Aquino"
            ],
            [
                "acronyms" => "MPM",
                "aeroport" => "Maputo, Mozambique International"
            ],
            [
                "acronyms" => "MRS",
                "aeroport" => "Marseille, France Marseille Provence"
            ],
            [
                "acronyms" => "MRU",
                "aeroport" => "Mauritius, Plaisance"
            ],
            [
                "acronyms" => "MSP",
                "aeroport" => "Minneapolis, MN, USA MSP Intl"
            ],
            [
                "acronyms" => "MSY",
                "aeroport" => "New Orleans, LA, USA Moisant Intl"
            ],
            [
                "acronyms" => "MTY",
                "aeroport" => "Monterrey, Mexico Escobedo"
            ],
            [
                "acronyms" => "MUB",
                "aeroport" => "Maun, Botswana"
            ],
            [
                "acronyms" => "MUC",
                "aeroport" => "Munich, Germany Franz Josef Strauss"
            ],
            [
                "acronyms" => "MUN",
                "aeroport" => "Maturin, Venezuela"
            ],
            [
                "acronyms" => "MVD",
                "aeroport" => "Montevideo, Uruguay Carrasco"
            ],
            [
                "acronyms" => "MVF",
                "aeroport" => "Mossoró, Rio Grande do Norte, Brasil Dix Sept Rosado"
            ],
            [
                "acronyms" => "MXP",
                "aeroport" => "Milan, Italy Malpensa"
            ],
            [
                "acronyms" => "NAN",
                "aeroport" => "Nadi, Fiji International"
            ],
            [
                "acronyms" => "NAP",
                "aeroport" => "Naples, Italy Capodichino"
            ],
            [
                "acronyms" => "NAS",
                "aeroport" => "Nassau, Bahamas International"
            ],
            [
                "acronyms" => "NAT",
                "aeroport" => "Natal, RN, Brasil Augusto Severo"
            ],
            [
                "acronyms" => "NBO",
                "aeroport" => "Nairobi, Kenya Jomo Kenyatta"
            ],
            [
                "acronyms" => "NCA",
                "aeroport" => "North Caicos, Turks &Caicos"
            ],
            [
                "acronyms" => "NCE",
                "aeroport" => "Nice, France Cote D`Azur"
            ],
            [
                "acronyms" => "NCL",
                "aeroport" => "Newcastle, England, UK"
            ],
            [
                "acronyms" => "NCY",
                "aeroport" => "Annecy, France Annecy Meythe"
            ],
            [
                "acronyms" => "NDJ",
                "aeroport" => "Ndjamena, Chad N`djamena"
            ],
            [
                "acronyms" => "NEV",
                "aeroport" => "Nevis, Saint Kitts And Nevis"
            ],
            [
                "acronyms" => "NGO",
                "aeroport" => "Nagoya, Japan Komaki"
            ],
            [
                "acronyms" => "NGS",
                "aeroport" => "Nagasaki, Japan Nagasaki"
            ],
            [
                "acronyms" => "NKC",
                "aeroport" => "Nouakchott, Mauritania"
            ],
            [
                "acronyms" => "NKG",
                "aeroport" => "Nanjing, China"
            ],
            [
                "acronyms" => "NLA",
                "aeroport" => "Ndola, Zambia"
            ],
            [
                "acronyms" => "NLD",
                "aeroport" => "Nuevo Laredo, Tamaulipas, Mexico"
            ],
            [
                "acronyms" => "NLP",
                "aeroport" => "Nelspruit, South Africa"
            ],
            [
                "acronyms" => "NOU",
                "aeroport" => "Noumea, New Caledonia Tontouta"
            ],
            [
                "acronyms" => "NRT",
                "aeroport" => "Tokyo, Japan Narita"
            ],
            [
                "acronyms" => "NSI",
                "aeroport" => "Yaounde, Cameroon Nsimalen"
            ],
            [
                "acronyms" => "NSN",
                "aeroport" => "Nelson, New Zealand Nelson"
            ],
            [
                "acronyms" => "NTE",
                "aeroport" => "Nantes, France Chateau Bougon"
            ],
            [
                "acronyms" => "NTL",
                "aeroport" => "Newcastle, Australia Williamtown"
            ],
            [
                "acronyms" => "NUE",
                "aeroport" => "Nuremberg, Germany Nuremberg"
            ],
            [
                "acronyms" => "NVT",
                "aeroport" => "Navegantes, SC, Brasil"
            ],
            [
                "acronyms" => "OAK",
                "aeroport" => "Oakland, CA, USA Metropolitan"
            ],
            [
                "acronyms" => "OAX",
                "aeroport" => "Oaxaca, Oaxaca, Mexico Xoxocotlan"
            ],
            [
                "acronyms" => "ODE",
                "aeroport" => "Odense, Denmark"
            ],
            [
                "acronyms" => "OKA",
                "aeroport" => "Okinawa, Ryukyu Islands, Japan"
            ],
            [
                "acronyms" => "OKC",
                "aeroport" => "Oklahoma City, OK, USA Will Rogers"
            ],
            [
                "acronyms" => "OKJ",
                "aeroport" => "Okayama, Japan"
            ],
            [
                "acronyms" => "OLB",
                "aeroport" => "Olbia Costa Smeralda, Sardenha, Itália"
            ],
            [
                "acronyms" => "ONT",
                "aeroport" => "Ontario, CA, USA International"
            ],
            [
                "acronyms" => "OPF",
                "aeroport" => "Miami, FL, USA Opa Locka"
            ],
            [
                "acronyms" => "OPO",
                "aeroport" => "Porto, Portugal"
            ],
            [
                "acronyms" => "ORB",
                "aeroport" => "Orebro, Sweden"
            ],
            [
                "acronyms" => "ORD",
                "aeroport" => "Chicago, IL, USA O`Hare"
            ],
            [
                "acronyms" => "ORF",
                "aeroport" => "Norfolk, VA, USA"
            ],
            [
                "acronyms" => "ORK",
                "aeroport" => "Cork, Ireland"
            ],
            [
                "acronyms" => "ORL",
                "aeroport" => "Orlando, FL, USA Herndon"
            ],
            [
                "acronyms" => "ORN",
                "aeroport" => "Oran, Algeria Es Senia"
            ],
            [
                "acronyms" => "ORY",
                "aeroport" => "Paris, France Orly"
            ],
            [
                "acronyms" => "OSH",
                "aeroport" => "Oshkosh, WI, USA Wittman Field"
            ],
            [
                "acronyms" => "OTP",
                "aeroport" => "Bucharest, Romania Otopeni"
            ],
            [
                "acronyms" => "OUA",
                "aeroport" => "Ouagadougou, Burkina Faso"
            ],
            [
                "acronyms" => "OUL",
                "aeroport" => "Oulu, Finland Oulu"
            ],
            [
                "acronyms" => "OVB",
                "aeroport" => "Novosibirsk, Russia Tolmachevo"
            ],
            [
                "acronyms" => "OVD",
                "aeroport" => "Asturias, Spain Asturias"
            ],
            [
                "acronyms" => "OXB",
                "aeroport" => "Bissau, Guinea Bissau Osvaldo Vieira"
            ],
            [
                "acronyms" => "OZZ",
                "aeroport" => "Ouarzazate, Morocco"
            ],
            [
                "acronyms" => "PAD",
                "aeroport" => "Paderborn, Germany"
            ],
            [
                "acronyms" => "PAP",
                "aeroport" => "Port Au Prince, Haiti Mais Gate"
            ],
            [
                "acronyms" => "PAT",
                "aeroport" => "Patna, India Patna"
            ],
            [
                "acronyms" => "PAZ",
                "aeroport" => "Poza Rica, Veracruz, Mexico"
            ],
            [
                "acronyms" => "PBC",
                "aeroport" => "Puebla, Puebla, Mexico"
            ],
            [
                "acronyms" => "PBI",
                "aeroport" => "West Palm Beach, FL, USA"
            ],
            [
                "acronyms" => "PBM",
                "aeroport" => "Paramaribo, Suriname Zanderij"
            ],
            [
                "acronyms" => "PDG",
                "aeroport" => "Padang, Indonesia Tabing"
            ],
            [
                "acronyms" => "PDL",
                "aeroport" => "Ponta Delgada, Açores, Portugal Nordela"
            ],
            [
                "acronyms" => "PDX",
                "aeroport" => "Portland, OR, USA International"
            ],
            [
                "acronyms" => "PEK",
                "aeroport" => "Beijing, China Capital Airport"
            ],
            [
                "acronyms" => "PEN",
                "aeroport" => "Penang, Malaysia International"
            ],
            [
                "acronyms" => "PER",
                "aeroport" => "Perth, Australia"
            ],
            [
                "acronyms" => "PEW",
                "aeroport" => "Peshawar, Pakistan"
            ],
            [
                "acronyms" => "PFO",
                "aeroport" => "Paphos, Cyprus International"
            ],
            [
                "acronyms" => "PHL",
                "aeroport" => "Philadelphia, PA, USA International"
            ],
            [
                "acronyms" => "PHX",
                "aeroport" => "Phoenix, AZ, USA Sky Harbor"
            ],
            [
                "acronyms" => "PID",
                "aeroport" => "Nassau, Bahamas Paradise Island"
            ],
            [
                "acronyms" => "PIK",
                "aeroport" => "Glasgow, Scotland, UK Prestwick"
            ],
            [
                "acronyms" => "PIT",
                "aeroport" => "Pittsburgh, PA, USA Greater Pit Intl"
            ],
            [
                "acronyms" => "PLS",
                "aeroport" => "Providenciales, Turks And Caicos"
            ],
            [
                "acronyms" => "PLU",
                "aeroport" => "Belo Horizonte MG, Brasil Pampulha"
            ],
            [
                "acronyms" => "PMC",
                "aeroport" => "Puerto Montt, Chile Tepual"
            ],
            [
                "acronyms" => "PMG",
                "aeroport" => "Ponta Porã, Mato Grosso do Sul, Brasil"
            ],
            [
                "acronyms" => "PMI",
                "aeroport" => "Palma Mallorca, Spain"
            ],
            [
                "acronyms" => "PMO",
                "aeroport" => "Palermo, Sicily, Italy Punta Raisi"
            ],
            [
                "acronyms" => "PNH",
                "aeroport" => "Phnom Penh, Cambodia Pochentong"
            ],
            [
                "acronyms" => "PNI",
                "aeroport" => "Pohnpei, Caroline Islands, Micronesia"
            ],
            [
                "acronyms" => "PNZ",
                "aeroport" => "Petrolina, PE, Brasil Senador Nilo Coelho"
            ],
            [
                "acronyms" => "POA",
                "aeroport" => "Porto Alegre, RS, Brasil Salgado Filho"
            ],
            [
                "acronyms" => "POG",
                "aeroport" => "Port Gentil, Gabon"
            ],
            [
                "acronyms" => "POM",
                "aeroport" => "Port Moresby, Papua New Guinea Jackson"
            ],
            [
                "acronyms" => "POP",
                "aeroport" => "Puerto Plata, Dominican Republic La Union"
            ],
            [
                "acronyms" => "POS",
                "aeroport" => "Port Of Spain, Trinidad & Tobago Piarco"
            ],
            [
                "acronyms" => "PPG",
                "aeroport" => "Pago Pago, American Samoa"
            ],
            [
                "acronyms" => "PPT",
                "aeroport" => "Papeete, French Polynesia Faaa"
            ],
            [
                "acronyms" => "PRG",
                "aeroport" => "Prague, Czech Republic Ruzyne"
            ],
            [
                "acronyms" => "PRI",
                "aeroport" => "Praslin Island, Seychelles"
            ],
            [
                "acronyms" => "PSA",
                "aeroport" => "Pisa, Italy G Galilei"
            ],
            [
                "acronyms" => "PSZ",
                "aeroport" => "Puerto Suarez, Bolivia"
            ],
            [
                "acronyms" => "PTF",
                "aeroport" => "Malololailai, Fiji Malololailai"
            ],
            [
                "acronyms" => "PTP",
                "aeroport" => "Pointe A Pitre, Guadeloupe Le Raizet"
            ],
            [
                "acronyms" => "PTY",
                "aeroport" => "Panama City, Panama Tocumen Intl"
            ],
            [
                "acronyms" => "PUJ",
                "aeroport" => "Punta Cana, Dominican Republic"
            ],
            [
                "acronyms" => "PUQ",
                "aeroport" => "Punta Arenas, Chile Presidente Ibanez"
            ],
            [
                "acronyms" => "PUS",
                "aeroport" => "Pusan, South Korea Kimhae"
            ],
            [
                "acronyms" => "PVG",
                "aeroport" => "Shangai, China Pudong"
            ],
            [
                "acronyms" => "PVH",
                "aeroport" => "Porto Velho RO, Brasil Gov. Jorge Texeira"
            ],
            [
                "acronyms" => "PVR",
                "aeroport" => "Puerto Vallarta, Mexico Gustavo Diaz Ordaz"
            ],
            [
                "acronyms" => "PXM",
                "aeroport" => "Puerto Escondido, Oaxaca, Mexico"
            ],
            [
                "acronyms" => "PZO",
                "aeroport" => "Puerto Ordaz, Venezuela"
            ],
            [
                "acronyms" => "QBF",
                "aeroport" => "Vail/Eagle, CO, USA"
            ],
            [
                "acronyms" => "QDU",
                "aeroport" => "Duesseldorf, Germany Train Station"
            ],
            [
                "acronyms" => "QKB",
                "aeroport" => "Breckenridge, CO, USA"
            ],
            [
                "acronyms" => "QKL",
                "aeroport" => "Cologne, Germany Train Station"
            ],
            [
                "acronyms" => "QRO",
                "aeroport" => "Queretaro, Queretaro, Mexico"
            ],
            [
                "acronyms" => "QSY",
                "aeroport" => "Sydney, NSW, Austrália"
            ],
            [
                "acronyms" => "RAB",
                "aeroport" => "Rabaul, Papua New Guinea Lakunai"
            ],
            [
                "acronyms" => "RAI",
                "aeroport" => "Praia, Ilha de Santiago, Cape Verde Praia"
            ],
            [
                "acronyms" => "RAK",
                "aeroport" => "Marrakech, Morocco Menara"
            ],
            [
                "acronyms" => "RAO",
                "aeroport" => "Ribeirão Preto, SP, Brasil Leite Lopes"
            ],
            [
                "acronyms" => "RAR",
                "aeroport" => "Rarotonga, Cook Islands"
            ],
            [
                "acronyms" => "RBA",
                "aeroport" => "Rabat, Morocco Sale"
            ],
            [
                "acronyms" => "RBR",
                "aeroport" => "Rio Branco AC, Brasil Plácido de Castro"
            ],
            [
                "acronyms" => "RDU",
                "aeroport" => "Raleigh/Durham, NC, USA Intl"
            ],
            [
                "acronyms" => "REC",
                "aeroport" => "Recife, Pernambuco, Brasil Guararapes / Gilberto Freyre"
            ],
            [
                "acronyms" => "REG",
                "aeroport" => "Reggio Calabria, Italy Tito Menniti"
            ],
            [
                "acronyms" => "REL",
                "aeroport" => "Trelew, Chubut, Argentina"
            ],
            [
                "acronyms" => "RES",
                "aeroport" => "Resistencia, Chaco, Argentina"
            ],
            [
                "acronyms" => "RGA",
                "aeroport" => "Rio Grande, Tierra Del Fuego, Argentina"
            ],
            [
                "acronyms" => "RGL",
                "aeroport" => "Rio Gallegos, Santa Cruz, Argentina"
            ],
            [
                "acronyms" => "RGN",
                "aeroport" => "Yangon, Myanmar Mingaladon"
            ],
            [
                "acronyms" => "RHO",
                "aeroport" => "Rhodes, Greece Paradisi"
            ],
            [
                "acronyms" => "RIC",
                "aeroport" => "Richmond, VA, USA"
            ],
            [
                "acronyms" => "RIX",
                "aeroport" => "Riga, Latvia Riga"
            ],
            [
                "acronyms" => "RKV",
                "aeroport" => "Reykjavik, Iceland Domestic"
            ],
            [
                "acronyms" => "ROM",
                "aeroport" => "Rome, Italy Leonardo Da Vinci / Fiumicino"
            ],
            [
                "acronyms" => "ROP",
                "aeroport" => "Rota, Northern Mariana Islands Rota"
            ],
            [
                "acronyms" => "ROR",
                "aeroport" => "Koror, Palau Airai"
            ],
            [
                "acronyms" => "ROS",
                "aeroport" => "Rosario, Santa Fe, Argentina Fisherton"
            ],
            [
                "acronyms" => "ROV",
                "aeroport" => "Rostov, Russia"
            ],
            [
                "acronyms" => "RTB",
                "aeroport" => "Roatan, Honduras Roatan"
            ],
            [
                "acronyms" => "RTM",
                "aeroport" => "Rotterdam, Netherlands"
            ],
            [
                "acronyms" => "RUH",
                "aeroport" => "Riyadh, Saudi Arabia King Khaled Intl"
            ],
            [
                "acronyms" => "SAB",
                "aeroport" => "Saba Island, Netherlands Antilles"
            ],
            [
                "acronyms" => "SAF",
                "aeroport" => "Santa Fe, NM, USA"
            ],
            [
                "acronyms" => "SAH",
                "aeroport" => "Sanaa, Yemen International"
            ],
            [
                "acronyms" => "SAL",
                "aeroport" => "San Salvador, El Salvador"
            ],
            [
                "acronyms" => "SAN",
                "aeroport" => "San Diego, CA, USA Lindbergh Intl"
            ],
            [
                "acronyms" => "SAP",
                "aeroport" => "San Pedro Sula, Honduras La Mesa"
            ],
            [
                "acronyms" => "SAT",
                "aeroport" => "San Antonio, TX, USA International"
            ],
            [
                "acronyms" => "SAV",
                "aeroport" => "Savannah, GA, USA Travis Field"
            ],
            [
                "acronyms" => "SBA",
                "aeroport" => "Santa Barbara, CA, USA"
            ],
            [
                "acronyms" => "SBH",
                "aeroport" => "St Barthelemy, Guadeloupe"
            ],
            [
                "acronyms" => "SCL",
                "aeroport" => "Santiago, Chile Com. Arturo M. Benitez"
            ],
            [
                "acronyms" => "SCN",
                "aeroport" => "Saarbruecken, Germany Ensheim"
            ],
            [
                "acronyms" => "SCQ",
                "aeroport" => "Santiago De Compostela, Spain"
            ],
            [
                "acronyms" => "SCU",
                "aeroport" => "Santiago, Cuba Antonio Maceo"
            ],
            [
                "acronyms" => "SDJ",
                "aeroport" => "Sendai, Japan Sendai"
            ],
            [
                "acronyms" => "SDQ",
                "aeroport" => "Sto. Domingo, Rep. Dominicana Las Americas"
            ],
            [
                "acronyms" => "SDR",
                "aeroport" => "Santander, Spain Santander"
            ],
            [
                "acronyms" => "SDU",
                "aeroport" => "Rio De Janeiro, Brasil Santos Dumont"
            ],
            [
                "acronyms" => "SEA",
                "aeroport" => "Seattle, WA, USA Seattle Tacoma Intl"
            ],
            [
                "acronyms" => "SEL",
                "aeroport" => "Seoul, Korea Kimpo International"
            ],
            [
                "acronyms" => "SEZ",
                "aeroport" => "Mahe Island, Seychelles"
            ],
            [
                "acronyms" => "SFA",
                "aeroport" => "Sfax, Tunisia Sfax Airport"
            ],
            [
                "acronyms" => "SFG",
                "aeroport" => "St Martin, Netherlands Antilles Esperance"
            ],
            [
                "acronyms" => "SFN",
                "aeroport" => "Santa Fe, Santa Fe, Argentina"
            ],
            [
                "acronyms" => "SFO",
                "aeroport" => "San Francisco, CA, USA Intl"
            ],
            [
                "acronyms" => "SGN",
                "aeroport" => "Ho Chi Minh City, Vietnam Tan Son Nhut"
            ],
            [
                "acronyms" => "SHA",
                "aeroport" => "Shanghai, China Intl /Hongqiao"
            ],
            [
                "acronyms" => "SHJ",
                "aeroport" => "Sharjah, United Arab Emirates"
            ],
            [
                "acronyms" => "SID",
                "aeroport" => "Sal, Cape Verde Amilcar Cabral"
            ],
            [
                "acronyms" => "SIN",
                "aeroport" => "Singapore, Singapore Changi"
            ],
            [
                "acronyms" => "SJC",
                "aeroport" => "San Jose, CA, USA International"
            ],
            [
                "acronyms" => "SJJ",
                "aeroport" => "Sarajevo, Bosnia Herzegowina Butmir"
            ],
            [
                "acronyms" => "SJK",
                "aeroport" => "São José dos Campos, São Paulo, Brasil"
            ],
            [
                "acronyms" => "SJO",
                "aeroport" => "San Jose, Costa Rica Juan Santamaria International"
            ],
            [
                "acronyms" => "SJU",
                "aeroport" => "San Juan, PR, USA Luis Munoz Marin"
            ],
            [
                "acronyms" => "SJW",
                "aeroport" => "Shijiazhuang, China Shijiazhuang"
            ],
            [
                "acronyms" => "SKB",
                "aeroport" => "St Kitts, Saint Kitts And Nevis Golden Rock"
            ],
            [
                "acronyms" => "SKG",
                "aeroport" => "Thessaloniki, Greece"
            ],
            [
                "acronyms" => "SKP",
                "aeroport" => "Skopje, Macedonia"
            ],
            [
                "acronyms" => "SLA",
                "aeroport" => "Salta, Salta, Argentina"
            ],
            [
                "acronyms" => "SLC",
                "aeroport" => "Salt Lake City, UT, USA"
            ],
            [
                "acronyms" => "SLU",
                "aeroport" => "St Lucia, Saint Lucia Vigie Field"
            ],
            [
                "acronyms" => "SLZ",
                "aeroport" => "São Luiz, Maranhão, Brasil Tirirical"
            ],
            [
                "acronyms" => "SMF",
                "aeroport" => "Sacramento, CA, USA Metropolitan"
            ],
            [
                "acronyms" => "SNA",
                "aeroport" => "Santa Ana, CA, USA John Wayne"
            ],
            [
                "acronyms" => "SNN",
                "aeroport" => "Shannon, Ireland Shannon"
            ],
            [
                "acronyms" => "SOF",
                "aeroport" => "Sofia, Bulgaria Sofia Intl"
            ],
            [
                "acronyms" => "SPB",
                "aeroport" => "St Thomas Island, VI, USA Seaplane Base"
            ],
            [
                "acronyms" => "SPN",
                "aeroport" => "Saipan, Northern Mariana Islands"
            ],
            [
                "acronyms" => "SPR",
                "aeroport" => "San Pedro, Belize"
            ],
            [
                "acronyms" => "SRE",
                "aeroport" => "Sucre, Bolivia"
            ],
            [
                "acronyms" => "SRQ",
                "aeroport" => "Sarasota/Bradenton, FL, USA"
            ],
            [
                "acronyms" => "SSA",
                "aeroport" => "Salvador, Brasil Dep. L. E. Magalhães"
            ],
            [
                "acronyms" => "SSH",
                "aeroport" => "Sharm El Sheikh, Egypt Ophira"
            ],
            [
                "acronyms" => "STL",
                "aeroport" => "St Louis, MO, USA Lambert St Louis Intl"
            ],
            [
                "acronyms" => "STM",
                "aeroport" => "Santarém, Pará, Brasil"
            ],
            [
                "acronyms" => "STN",
                "aeroport" => "London, England, UK Stansted"
            ],
            [
                "acronyms" => "STR",
                "aeroport" => "Stuttgart, Germany Echterdingen"
            ],
            [
                "acronyms" => "STT",
                "aeroport" => "St Thomas Island, VI, USA Cyril E King"
            ],
            [
                "acronyms" => "STX",
                "aeroport" => "St Croix Island, VI, USA"
            ],
            [
                "acronyms" => "SUB",
                "aeroport" => "Surabaya, Indonesia Juanda Airport"
            ],
            [
                "acronyms" => "SUV",
                "aeroport" => "Suva, Fiji Nausori"
            ],
            [
                "acronyms" => "SVD",
                "aeroport" => "St Vincent, St. Vincent And The Grenadines"
            ],
            [
                "acronyms" => "SVG",
                "aeroport" => "Stavanger, Norway Sola"
            ],
            [
                "acronyms" => "SVO",
                "aeroport" => "Moscou, Russia Sheremetyevo"
            ],
            [
                "acronyms" => "SVQ",
                "aeroport" => "Sevilla, Spain"
            ],
            [
                "acronyms" => "SVU",
                "aeroport" => "Savusavu, Fiji Savusavu"
            ],
            [
                "acronyms" => "SWP",
                "aeroport" => "Swakopmund, Namibia"
            ],
            [
                "acronyms" => "SXB",
                "aeroport" => "Strasbourg, France Entzheim"
            ],
            [
                "acronyms" => "SXF",
                "aeroport" => "Berlin, Germany Schoenefeld"
            ],
            [
                "acronyms" => "SXM",
                "aeroport" => "St Maarten, Netherlands Antilles Juliana"
            ],
            [
                "acronyms" => "SYD",
                "aeroport" => "Sydney, Australia Sydney /Kingsford Smith"
            ],
            [
                "acronyms" => "SZG",
                "aeroport" => "Salzburg, Austria Salzburg"
            ],
            [
                "acronyms" => "SZX",
                "aeroport" => "Shenzhen, China Shenzhen"
            ],
            [
                "acronyms" => "TAB",
                "aeroport" => "Tobago, Trinidad & Tobago Crown Point"
            ],
            [
                "acronyms" => "TAE",
                "aeroport" => "Taegu, South Korea"
            ],
            [
                "acronyms" => "TAM",
                "aeroport" => "Tampico, Tamaulipas, Mexico"
            ],
            [
                "acronyms" => "TAS",
                "aeroport" => "Tashkent, Uzbekistan"
            ],
            [
                "acronyms" => "TBS",
                "aeroport" => "Tbilisi, Georgia Novo Alexeyevka"
            ],
            [
                "acronyms" => "TBT",
                "aeroport" => "Tabatinga, Amazonas, Brasil"
            ],
            [
                "acronyms" => "TBU",
                "aeroport" => "Nuku Alofa/Tongatapu, Tonga"
            ],
            [
                "acronyms" => "TFN",
                "aeroport" => "Tenerife, Canarias, Espanha Los Rodeos"
            ],
            [
                "acronyms" => "TFS",
                "aeroport" => "Tenerife, Canarias, Espanha Reina Sofia"
            ],
            [
                "acronyms" => "TGU",
                "aeroport" => "Tegucigalpa, Honduras Toncontin"
            ],
            [
                "acronyms" => "THE",
                "aeroport" => "Teresina, Piaui, Brasil"
            ],
            [
                "acronyms" => "THF",
                "aeroport" => "Berlin, Germany Tempelhof"
            ],
            [
                "acronyms" => "THR",
                "aeroport" => "Tehran, Iran Mehrabad"
            ],
            [
                "acronyms" => "TIA",
                "aeroport" => "Tirana, Albania Rinas"
            ],
            [
                "acronyms" => "TIJ",
                "aeroport" => "Tijuana, Mexico Gen. Abelardo L Rodriguez"
            ],
            [
                "acronyms" => "TIQ",
                "aeroport" => "Tinian, Northern Mariana Islands"
            ],
            [
                "acronyms" => "TKK",
                "aeroport" => "Truk, Caroline Islands, Micronesia"
            ],
            [
                "acronyms" => "TKS",
                "aeroport" => "Tokushima, Japan"
            ],
            [
                "acronyms" => "TKU",
                "aeroport" => "Turku, Finland"
            ],
            [
                "acronyms" => "TLH",
                "aeroport" => "Tallahassee, FL, USA"
            ],
            [
                "acronyms" => "TLL",
                "aeroport" => "Tallinn, Estonia Ulemiste"
            ],
            [
                "acronyms" => "TLS",
                "aeroport" => "Toulouse, France Blagnac"
            ],
            [
                "acronyms" => "TLV",
                "aeroport" => "Tel Aviv Yafo, Israel Ben Gurion"
            ],
            [
                "acronyms" => "TNG",
                "aeroport" => "Tangier, Morocco Boukhalef Souahel"
            ],
            [
                "acronyms" => "TNR",
                "aeroport" => "Antananarivo, Madagascar Ivato"
            ],
            [
                "acronyms" => "TOL",
                "aeroport" => "Toledo, OH, USA"
            ],
            [
                "acronyms" => "TOS",
                "aeroport" => "Tromso, Norway Tromso/Langes"
            ],
            [
                "acronyms" => "TOY",
                "aeroport" => "Toyama, Japan Toyama"
            ],
            [
                "acronyms" => "TPA",
                "aeroport" => "Tampa, FL, USA Tampa Intl"
            ],
            [
                "acronyms" => "TPE",
                "aeroport" => "Taipei, Taiwan Chiang Kai Shek"
            ],
            [
                "acronyms" => "TRC",
                "aeroport" => "Torreon, Coahuila, Mexico"
            ],
            [
                "acronyms" => "TRD",
                "aeroport" => "Trondheim, Norway"
            ],
            [
                "acronyms" => "TRN",
                "aeroport" => "Turin, Italy Caselle"
            ],
            [
                "acronyms" => "TRS",
                "aeroport" => "Trieste, Italy Ronchi Dei Legionari"
            ],
            [
                "acronyms" => "TRU",
                "aeroport" => "Trujillo, Peru Trujillo"
            ],
            [
                "acronyms" => "TRV",
                "aeroport" => "Trivandrum, India Trivandrum"
            ],
            [
                "acronyms" => "TRZ",
                "aeroport" => "Tiruchirapally, India"
            ],
            [
                "acronyms" => "TSA",
                "aeroport" => "Taipei, Taiwan Sung Shan"
            ],
            [
                "acronyms" => "TSR",
                "aeroport" => "Timisoara, Romania Timisoara"
            ],
            [
                "acronyms" => "TSS",
                "aeroport" => "New York, NY, USA East 34Th Street Heliport"
            ],
            [
                "acronyms" => "TTJ",
                "aeroport" => "Tottori, Japan Tottori"
            ],
            [
                "acronyms" => "TUC",
                "aeroport" => "Tucuman, Argentina Benjamin Matienzo"
            ],
            [
                "acronyms" => "TUF",
                "aeroport" => "Tours, France St Symphorien"
            ],
            [
                "acronyms" => "TUL",
                "aeroport" => "Tulsa, OK, USA"
            ],
            [
                "acronyms" => "TUN",
                "aeroport" => "Tunis, Tunisia Carthage"
            ],
            [
                "acronyms" => "TUO",
                "aeroport" => "Taupo, New Zealand Taupo"
            ],
            [
                "acronyms" => "TUS",
                "aeroport" => "Tucson, AZ, USA International"
            ],
            [
                "acronyms" => "TXL",
                "aeroport" => "Berlin, Germany Tegel"
            ],
            [
                "acronyms" => "TZA",
                "aeroport" => "Belize City, Belize"
            ],
            [
                "acronyms" => "TZN",
                "aeroport" => "South Andros, Bahamas Congo Town"
            ],
            [
                "acronyms" => "TZX",
                "aeroport" => "Trabzon, Turquia Trabzon"
            ],
            [
                "acronyms" => "UAK",
                "aeroport" => "Narsarsuaq, Greenland"
            ],
            [
                "acronyms" => "UAQ",
                "aeroport" => "San Juan, San Juan, Argentina"
            ],
            [
                "acronyms" => "UBJ",
                "aeroport" => "Ube, Japan"
            ],
            [
                "acronyms" => "UDR",
                "aeroport" => "Udaipur, India"
            ],
            [
                "acronyms" => "UIO",
                "aeroport" => "Quito, Ecuador Mariscal"
            ],
            [
                "acronyms" => "ULN",
                "aeroport" => "Ulan Bator, Mongolia Ulan Bator"
            ],
            [
                "acronyms" => "ULY",
                "aeroport" => "Ulyanovsk, Russia"
            ],
            [
                "acronyms" => "UME",
                "aeroport" => "Umea, Sweden Umea"
            ],
            [
                "acronyms" => "URC",
                "aeroport" => "Urumqi, China"
            ],
            [
                "acronyms" => "URT",
                "aeroport" => "Surat Thani, Thailand"
            ],
            [
                "acronyms" => "USH",
                "aeroport" => "Ushuaia, Tierra Del Fuego, Argentina"
            ],
            [
                "acronyms" => "USM",
                "aeroport" => "Koh Samui, Thailand"
            ],
            [
                "acronyms" => "USN",
                "aeroport" => "Ulsan, South Korea"
            ],
            [
                "acronyms" => "UTH",
                "aeroport" => "Udon Thani, Thailand"
            ],
            [
                "acronyms" => "UVF",
                "aeroport" => "St Lucia, Saint Lucia Hewanorra"
            ],
            [
                "acronyms" => "VAA",
                "aeroport" => "Vaasa, Finland Vaasa"
            ],
            [
                "acronyms" => "VAR",
                "aeroport" => "Varna, Bulgaria Varna"
            ],
            [
                "acronyms" => "VAS",
                "aeroport" => "Sivas, Turkey Sivas"
            ],
            [
                "acronyms" => "VBY",
                "aeroport" => "Visby, Sweden Visby"
            ],
            [
                "acronyms" => "VCE",
                "aeroport" => "Venice, Italy Marco Polo"
            ],
            [
                "acronyms" => "VDM",
                "aeroport" => "Viedma Gobernador Castello, Argentina"
            ],
            [
                "acronyms" => "VDZ",
                "aeroport" => "Valdez, AK, USA"
            ],
            [
                "acronyms" => "VFA",
                "aeroport" => "Victoria Falls, Zimbabwe"
            ],
            [
                "acronyms" => "VGO",
                "aeroport" => "Vigo, Spain"
            ],
            [
                "acronyms" => "VIE",
                "aeroport" => "Vienna, Austria Schwechat"
            ],
            [
                "acronyms" => "VIJ",
                "aeroport" => "Virgin Gorda, Virgin Islands (British)"
            ],
            [
                "acronyms" => "VIT",
                "aeroport" => "Vitoria, Spain"
            ],
            [
                "acronyms" => "VIX",
                "aeroport" => "Vitoria, ES, Brasil Eurico Sales"
            ],
            [
                "acronyms" => "VKO",
                "aeroport" => "Moscou, Russia Vnukovo"
            ],
            [
                "acronyms" => "VLC",
                "aeroport" => "Valencia, Spain Valencia"
            ],
            [
                "acronyms" => "VLG",
                "aeroport" => "Villa Gesell, Buenos Aires, Argentina"
            ],
            [
                "acronyms" => "VLI",
                "aeroport" => "Port Vila, Vanuatu Bauerfield"
            ],
            [
                "acronyms" => "VLL",
                "aeroport" => "Valladolid, Spain Valladolid"
            ],
            [
                "acronyms" => "VLN",
                "aeroport" => "Valencia, Venezuela Valencia"
            ],
            [
                "acronyms" => "VNO",
                "aeroport" => "Vilnius, Lithuania Vilnius Airport"
            ],
            [
                "acronyms" => "VNS",
                "aeroport" => "Varanasi, India Babatpur"
            ],
            [
                "acronyms" => "VOG",
                "aeroport" => "Volgograd, Russia Volgograd"
            ],
            [
                "acronyms" => "VRA",
                "aeroport" => "Varadero, Cuba Juan Gualberto Gomez"
            ],
            [
                "acronyms" => "VRB",
                "aeroport" => "Vero Beach, FL, USA Municipal"
            ],
            [
                "acronyms" => "VRN",
                "aeroport" => "Verona, Italy Verona"
            ],
            [
                "acronyms" => "VSA",
                "aeroport" => "Villahermosa, Mexico Carlos R Perez"
            ],
            [
                "acronyms" => "VTE",
                "aeroport" => "Vientiane, Laos Wattay"
            ],
            [
                "acronyms" => "VVI",
                "aeroport" => "Santa Cruz, Bolivia Viru Viru"
            ],
            [
                "acronyms" => "VVO",
                "aeroport" => "Vladivostok, Russia"
            ],
            [
                "acronyms" => "VXE",
                "aeroport" => "São Vicente, Cape Verde São Pedro"
            ],
            [
                "acronyms" => "VXO",
                "aeroport" => "Vaxjo, Sweden"
            ],
            [
                "acronyms" => "WAT",
                "aeroport" => "Waterford, Ireland"
            ],
            [
                "acronyms" => "WAW",
                "aeroport" => "Warsaw, Poland Okecie"
            ],
            [
                "acronyms" => "WDH",
                "aeroport" => "Windhoek, Namibia Jg Strijdom"
            ],
            [
                "acronyms" => "WIL",
                "aeroport" => "Nairobi, Kenya Wilson Arpt"
            ],
            [
                "acronyms" => "WLG",
                "aeroport" => "Wellington, New Zealand"
            ],
            [
                "acronyms" => "WRO",
                "aeroport" => "Wroclaw, Poland Strachowice"
            ],
            [
                "acronyms" => "XAP",
                "aeroport" => "Chapecó, Santa Catarina, Brasil"
            ],
            [
                "acronyms" => "YAP",
                "aeroport" => "Yap, Caroline Islands, Micronesia"
            ],
            [
                "acronyms" => "YBA",
                "aeroport" => "Banff, Alberta, Canada"
            ],
            [
                "acronyms" => "YDF",
                "aeroport" => "Deer Lake, Newfoundland, Canada"
            ],
            [
                "acronyms" => "YEC",
                "aeroport" => "Yechon, South Korea"
            ],
            [
                "acronyms" => "YEG",
                "aeroport" => "Edmonton, Alberta, Canada Intl"
            ],
            [
                "acronyms" => "YHD",
                "aeroport" => "Dryden, Ontario, Canada"
            ],
            [
                "acronyms" => "YHM",
                "aeroport" => "Hamilton, Ontario, Canada Civic"
            ],
            [
                "acronyms" => "YHZ",
                "aeroport" => "Halifax, Nova Scotia, Canada"
            ],
            [
                "acronyms" => "YKS",
                "aeroport" => "Yakutsk, Russia"
            ],
            [
                "acronyms" => "YLW",
                "aeroport" => "Kelowna, British Columbia, Canada"
            ],
            [
                "acronyms" => "YMX",
                "aeroport" => "Montreal, Quebec, Canada"
            ],
            [
                "acronyms" => "YOW",
                "aeroport" => "Ottawa, Ontario, Canada Intl"
            ],
            [
                "acronyms" => "YQB",
                "aeroport" => "Quebec, Canada Sainte Foy Airport"
            ],
            [
                "acronyms" => "YQG",
                "aeroport" => "Windsor, Ontario, Canada Intl"
            ],
            [
                "acronyms" => "YQR",
                "aeroport" => "Regina, Saskatchewan, Canada"
            ],
            [
                "acronyms" => "YQX",
                "aeroport" => "Gander, Newfoundland, Canada"
            ],
            [
                "acronyms" => "YTZ",
                "aeroport" => "Toronto, Ontario, Canada"
            ],
            [
                "acronyms" => "YUL",
                "aeroport" => "Montreal, Quebec, Canada"
            ],
            [
                "acronyms" => "YUM",
                "aeroport" => "Yuma, AZ, USA International"
            ],
            [
                "acronyms" => "YVR",
                "aeroport" => "Vancouver, British Columbia, Canada"
            ],
            [
                "acronyms" => "YVZ",
                "aeroport" => "Deer Lake, Ontario, Canada"
            ],
            [
                "acronyms" => "YWG",
                "aeroport" => "Winnipeg, Manitoba, Canada"
            ],
            [
                "acronyms" => "YWH",
                "aeroport" => "Victoria, British Columbia, Canada"
            ],
            [
                "acronyms" => "YXD",
                "aeroport" => "Edmonton, Alberta, Canada"
            ],
            [
                "acronyms" => "YYC",
                "aeroport" => "Calgary, Alberta, Canada"
            ],
            [
                "acronyms" => "YYJ",
                "aeroport" => "Victoria, British Columbia, Canada"
            ],
            [
                "acronyms" => "YYR",
                "aeroport" => "Goose Bay, Newfoundland, Canada"
            ],
            [
                "acronyms" => "YYT",
                "aeroport" => "St Johns, Newfoundland, Canada"
            ],
            [
                "acronyms" => "YYU",
                "aeroport" => "Kapuskasing, Ontario, Canada"
            ],
            [
                "acronyms" => "YYY",
                "aeroport" => "Mont Joli, Quebec, Canada"
            ],
            [
                "acronyms" => "YYZ",
                "aeroport" => "Toronto, Ontario, Canada Pearson Intl"
            ],
            [
                "acronyms" => "YZF",
                "aeroport" => "Yellowknife, NW Territories, Canadá"
            ],
            [
                "acronyms" => "ZAG",
                "aeroport" => "Zagreb, Croatia (Hrvatska) Zagreb"
            ],
            [
                "acronyms" => "ZAH",
                "aeroport" => "Zahedan, Iran Zahedan"
            ],
            [
                "acronyms" => "ZAL",
                "aeroport" => "Valdivia, Chile Pichoy"
            ],
            [
                "acronyms" => "ZAM",
                "aeroport" => "Zamboanga, Philippines"
            ],
            [
                "acronyms" => "ZAZ",
                "aeroport" => "Zaragoza, Spain Zaragoza"
            ],
            [
                "acronyms" => "ZBV",
                "aeroport" => "Vail/Eagle, CO, USA"
            ],
            [
                "acronyms" => "ZCL",
                "aeroport" => "Zacatecas, Zacatecas, Mexico"
            ],
            [
                "acronyms" => "ZCO",
                "aeroport" => "Temuco, Chile Manquehue"
            ],
            [
                "acronyms" => "ZHA",
                "aeroport" => "Zhanjiang, China"
            ],
            [
                "acronyms" => "ZIH",
                "aeroport" => "Ixtapa/Zihuatanejo, Guerrero, Mexico"
            ],
            [
                "acronyms" => "ZLO",
                "aeroport" => "Manzanillo, Colima, Mexico"
            ],
            [
                "acronyms" => "ZNZ",
                "aeroport" => "Zanzibar, Tanzania Kisauni"
            ],
            [
                "acronyms" => "ZRH",
                "aeroport" => "Zurich, Switzerland Zurich"
            ],
            [
                "acronyms" => "ZSA",
                "aeroport" => "San Salvador, Bahamas"
            ],
            [
                "acronyms" => "ZTH",
                "aeroport" => "Zakinthos, Greece Zakinthos"
            ]
        ];

        foreach ($data as $aeroports) {
            Aeroport::create([
                'acronyms' => $aeroports['acronyms'],
                'aeroport' => $aeroports['aeroport']
            ]);
        }
    }
}
