CREATE DATABASE IF NOT EXISTS Website;
USE Website;

CREATE TABLE IF NOT EXISTS users (
    login VARCHAR(255) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    PRIMARY KEY (login)
);

CREATE TABLE IF NOT EXISTS posts (
    post_id INT AUTO_INCREMENT NOT NULL,
    author_login VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (post_id),
    FOREIGN KEY (author_login) REFERENCES users(login) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS likes (
    like_id INT AUTO_INCREMENT NOT NULL,
    user_login VARCHAR(255) NOT NULL,
    post_id INT NOT NULL,
    liked_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (like_id),
    FOREIGN KEY (user_login) REFERENCES users(login) ON DELETE CASCADE,
    FOREIGN KEY (post_id) REFERENCES posts(post_id) ON DELETE CASCADE,
    UNIQUE (user_login, post_id)
);

CREATE TABLE IF NOT EXISTS sessions (
    token VARCHAR(255) NOT NULL,
    user_login VARCHAR(255) NOT NULL,
    expiration DATETIME NOT NULL,
    PRIMARY KEY (token),
    FOREIGN KEY (user_login) REFERENCES users(login) ON DELETE CASCADE
);

CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    sujet TEXT NOT NULL
);

INSERT INTO services (titre, sujet) VALUES
('Analyse et manipulation de donnees', 'En utilisant des bibliothèques puissantes comme Pandas, NumPy et Matplotlib, nous creons des pipelines de donnees performants pour nettoyer, transformer et analyser des ensembles de donnees volumineux. Nous fournissons des visualisations claires et exploitables pour aider à la prise de decision et au reporting.'),
('Developpement logiciel', 'Nous concevons des scripts Python afin d''automatiser des tâches repetitives ou complexes, comme la gestion de fichiers, l''envoi d''emails ou l''integration de systèmes. L''objectif est de rendre les processus plus rapides et moins sujets à des erreurs humaines. Ces outils sont facilement configurables et adaptables aux besoins specifiques des utilisateurs.'),
('Apprentissage automatique et IA', 'Nous modelisons des systèmes d''apprentissage automatique en utilisant des frameworks tels que TensorFlow, PyTorch, et Scikit-learn. Que ce soit pour des tâches de classification, regression ou analyse de series temporelles, nous developpons des modèles predictifs avec des performances optimisees, en exploitant les dernières avancees en intelligence artificielle.'),
('Gestion de bases de donnees', 'Nous utilisons SQLAlchemy pour faciliter l interaction avec des bases de donnees relationnelles, en simplifiant la gestion des schemas et des requêtes SQL. Nous construisons des systèmes qui permettent une gestion fluide et performante des donnees tout en assurant leur integrite et leur accessibilite.'),
('Developpement Web', 'Nous developpons des applications Web robustes et performantes en utilisant des frameworks Python tels que Flask et Django. Cela inclut la creation de sites Web dynamiques, ainsi que des API RESTful pour des interactions efficaces avec des bases de donnees ou des systèmes externes. Notre objectif est de livrer des applications rapides, scalables et securisees.'),
('Programmation orientee objet (POO)', 'Nous appliquons les principes de la POO pour concevoir des solutions modulaires et reutilisables. L utilisation des concepts de classes, heritage, polymorphisme et encapsulation nous permet de creer des architectures logicielles robustes et evolutives, adaptees à des projets de grande envergure.'),
('Scripts pour la cybersecurite', 'Nous developpons des scripts pour analyser des fichiers ou pour effectuer des simulations d''attaques dans le cadre de tests de securite. Ces outils sont utilises pour automatiser des tâches de surveillance, de detection d''anomalies ou d''audit de systèmes, contribuant ainsi à renforcer la securite des infrastructures.'),
('Applications scientifiques', 'Nous mettons en œuvre des solutions Python dans des domaines scientifiques, en utilisant des bibliothèques comme SciPy, SymPy, ou Matplotlib. Cela inclut des applications pour la modelisation numerique, la simulation de phenomènes physiques, et le traitement des donnees experimentales, afin d''aider à la recherche et à l''innovation.'),
('Developpement d applications complexes : logiciels d entreprise et systèmes distribues (JEE, Spring)', 'Notre expertise repose sur la conception et le developpement d applications d entreprise complexes en utilisant des technologies modernes telles que Java EE et Spring. Nous avons une solide experience dans la creation de systèmes distribues, permettant à des applications de fonctionner de manière transparente à travers des reseaux d entreprises. Grâce à des pratiques de developpement orientees services, nous assurons l integration et la scalabilite des solutions.'),
('Programmation orientee objet avancee : gestion des interfaces, heritage, polymorphisme et encapsulation', 'Nous mettons en œuvre les principes fondamentaux de la programmation orientee objet (POO) avec un focus particulier sur les concepts avances. La gestion des interfaces, l heritage, le polymorphisme et l encapsulation sont des elements cles de nos developpements, permettant d ecrire du code modulaire, flexible et facile à maintenir. Cette approche garantit une architecture evolutive et reutilisable.'),
('Developpement mobile Android : Creation d applications avec Android SDK', 'En tant que developpeurs Android experimentes, nous creons des applications mobiles de haute qualite en utilisant le SDK Android. Nous exploitons toutes les capacites de la plateforme pour concevoir des experiences utilisateurs fluides et intuitives, tout en optimisant les performances pour garantir une experience optimale sur tous les appareils Android.'),
('Developpement de services Web : API RESTful avec des frameworks comme Spring Boot', 'Nous developpons des services Web performants en utilisant Spring Boot pour concevoir des API RESTful efficaces. Grâce à une architecture legère et evolutive, nos services Web sont capables de gerer des volumes de requêtes importants tout en maintenant une grande simplicite d integration et d utilisation pour les clients.'),
('Gestion de memoire et optimisation : Utilisation efficace du garbage collector et des threads', 'La gestion de la memoire est essentielle dans le developpement de logiciels Java. Nous optimisons l utilisation du garbage collector et gerons les threads de manière efficace pour eviter les fuites de memoire et garantir des performances maximales, même pour des applications à fort trafic.'),
('Utilisation de bases de donnees : connexion et manipulation via JDBC ou Hibernate', 'Nous integrons des bases de donnees relationnelles dans nos applications Java en utilisant des technologies telles que JDBC et Hibernate. Grâce à ces outils, nous assurons une gestion optimale des donnees et une interaction fluide avec les systèmes de gestion de bases de donnees, en garantissant la coherence et la performance des transactions.'),
('Securisation des applications : gestion des sessions, des authentifications et des autorisations', 'La securite est une priorite dans tous nos projets. Nous mettons en place des mecanismes de gestion des sessions, d authentification et d autorisation robustes pour proteger les donnees des utilisateurs et garantir l''integrite des applications. Cela inclut des techniques comme le chiffrement des donnees sensibles et l utilisation d outils comme Spring Security pour proteger les applications contre les attaques.'),
('Applications multiplateformes : portabilite grâce au principe « Write Once, Run Anywhere »', 'Nous nous engageons à creer des applications multiplateformes en suivant le principe « Write Once, Run Anywhere ». Grâce à Java, qui permet une execution homogène sur differentes plateformes, nous assurons la portabilite des solutions que nous developpons, permettant à nos applications de fonctionner de manière transparente sur des environnements varies.'),
('Developpement front-end : creation d interfaces utilisateur dynamiques avec React, Angular ou Vue.js', 'Nous sommes experts dans le developpement d interfaces utilisateur modernes et interactives grâce à des frameworks populaires tels que React, Angular et Vue.js. Ces technologies nous permettent de construire des interfaces fluides et reactives, en assurant une experience utilisateur optimale sur tous les types d''appareils.'),
('Programmation asynchrone : gestion des promesses, Async/Await, et manipulation d API REST', 'La gestion de la programmation asynchrone est essentielle pour offrir des applications reactives et performantes. Nous utilisons des techniques telles que les promesses, Async/Await, et la manipulation d API REST pour garantir des interactions fluides avec les serveurs, tout en optimisant les performances de nos applications.'),
('Developpement Backend : creation de serveurs et d API avec Node.js et Express.js', 'Notre equipe cree des serveurs et des API puissants et scalables avec Node.js et Express.js. Grâce à la nature non bloquante de Node.js, nous construisons des applications backend performantes capables de gerer des milliers de requêtes simultanees tout en offrant une grande flexibilite.'),
('Manipulation du DOM : dynamisation et personnalisation de pages HTML/CSS', 'Nous mettons à profit nos competences en manipulation du DOM pour dynamiser des pages HTML et CSS, rendant ainsi les pages web interactives et personnalisees. Cette approche permet d''ameliorer l''engagement utilisateur et de creer des experiences web plus intuitives et interactives.'),
('Frameworks modernes : maîtrise de bibliothèques populaires comme jQuery ou Svelte', 'En plus des frameworks populaires comme React, Vue et Angular, nous maîtrisons egalement des bibliothèques comme jQuery pour une manipulation efficace du DOM et Svelte pour creer des applications ultra-rapides et legères. Ces outils nous permettent d ecrire du code concis et performant pour des interfaces reactives.'),
('Applications temps reel : Utilisation de WebSockets et de Frameworks comme Socket.IO', 'Nous developpons des applications en temps reel en utilisant des technologies comme WebSockets et des frameworks comme Socket.IO. Ces solutions permettent à nos applications de recevoir des donnees en temps reel, telles que des mises à jour de chat, des notifications ou des flux de donnees, garantissant une experience utilisateur fluide et instantanee.'),
('Tests unitaires et E2E : Utilisation d outils comme Jest, Mocha ou Cypress', 'La qualite et la stabilite du code sont au cœur de nos preoccupations. Nous utilisons des outils de tests comme Jest, Mocha et Cypress pour effectuer des tests unitaires et de bout en bout (E2E). Cela nous permet de valider le bon fonctionnement de nos applications et de nous assurer qu elles repondent aux attentes des utilisateurs sans regression.'),
('Applications multiplateformes : developpement mobile avec React Native et Electron pour des apps desktop', 'Nous nous specialisons dans le developpement d applications multiplateformes, en utilisant des technologies comme React Native pour les applications mobiles et Electron pour les applications de bureau. Ces outils permettent de creer des applications natives qui fonctionnent sur plusieurs plateformes, offrant ainsi une experience utilisateur coherente.'),
('Optimisation des performances : gestion du rendu et du temps de reponse avec des outils comme Lighthouse', 'Nous analysons et optimisons les performances de nos applications web en utilisant des outils comme Lighthouse. Nous nous assurons que nos applications se chargent rapidement et offrent une experience fluide, tout en surveillant les elements qui pourraient affecter la vitesse ou l interactivite du site.'),
('Gestion des erreurs : mise en place de systèmes de monitoring et d alertes avec des outils comme Sentry', 'Nous mettons en place des systèmes de monitoring des erreurs dans nos applications, en utilisant des outils comme Sentry pour suivre et gerer les erreurs en temps reel. Ces systèmes permettent de reperer les problèmes rapidement et d y remedier avant qu ils n affectent l experience utilisateur.'),
('Continous Integration (CI) et Continous Delivery (CD) : mise en place de pipelines automatises', 'Nous adoptons des pratiques de developpement moderne avec l integration continue (CI) et la livraison continue (CD). Cela nous permet de livrer du code de manière rapide et fiable, en automatisant les tests et les deploiements grâce à des outils comme Jenkins, GitLab CI ou GitHub Actions.'),
('Containerisation : gestion des environnements avec Docker et Kubernetes', 'Nous utilisons des technologies de containerisation comme Docker et Kubernetes pour faciliter le deploiement et la gestion d applications dans des environnements cloud. Ces outils permettent d assurer la portabilite et la scalabilite des solutions que nous developpons, tout en garantissant un contrôle precis des ressources et de l''infrastructure.'),
('Gestion de la configuration : utilisation d outils comme Ansible et Terraform', 'Nous gerons la configuration de nos infrastructures à l aide d outils comme Ansible et Terraform. Ces outils permettent de gerer automatiquement l etat de nos systèmes et d assurer une gestion coherente et fiable des configurations sur des infrastructures complexes.'),
('Gestion des API : documentation et test avec des outils comme Swagger ou Postman', 'Nous utilisons des outils comme Swagger ou Postman pour la documentation et le test des API que nous developpons. Ces outils facilitent la creation de specifications claires et permettent une verification rapide de l interoperabilite des API avec d autres systèmes.'),
('Securisation des API : utilisation de mecanismes comme OAuth2, JWT et HTTPS', 'Nous securisons les API que nous developpons en utilisant des mecanismes comme OAuth2, JWT et HTTPS. Ces techniques garantissent que seules les personnes et les systèmes autorises peuvent acceder aux donnees sensibles, tout en assurant une communication securisee entre les clients et les serveurs.');
;
